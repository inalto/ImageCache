<?php
App::uses('ImageCacheAppController', 'ImageCache.Controller');
/**
 * Effects Controller
 *
 * @property Effect $Effect
 * @property PaginatorComponent $Paginator
 */
class EffectsController extends ImageCacheAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Effect->recursive = 0;
		$this->set('effects', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Effect->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'effect')));
		}
		$options = array('conditions' => array('Effect.' . $this->Effect->primaryKey => $id));
		$this->set('effect', $this->Effect->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Effect->create();
			if ($this->Effect->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__d('croogo', '%s has been saved', __d('imagecache', 'effect')), 'default', array('class' => 'success'));
				$redirectTo = array('action' => 'index');
				if (isset($this->request->data['apply'])) {
					$redirectTo = array('action' => 'edit', $this->Effect->id);
				}
				if (isset($this->request->data['save_and_new'])) {
					$redirectTo = array('action' => 'add');
				}
				return $this->redirect($redirectTo);
			} else {
				$this->Session->setFlash(__d('croogo', '%s could not be saved. Please, try again.', __d('imagecache', 'effect')), 'default', array('class' => 'error'));
			}
		}
		$styles = $this->Effect->Style->find('list');
		$this->set(compact('styles'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Effect->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'effect')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Effect->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__d('croogo', '%s has been saved', __d('imagecache', 'effect')), 'default', array('class' => 'success'));
				$redirectTo = array('action' => 'index');
				if (isset($this->request->data['apply'])) {
					$redirectTo = array('action' => 'edit', $id);
				}
				if (isset($this->request->data['save_and_new'])) {
					$redirectTo = array('action' => 'add');
				}
				return $this->redirect($redirectTo);
			} else {
				$this->Session->setFlash(__d('croogo', '%s could not be saved. Please, try again.', __d('imagecache', 'effect')), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Effect.' . $this->Effect->primaryKey => $id));
			$this->request->data = $this->Effect->find('first', $options);
		}
		$styles = $this->Effect->Style->find('list');
		$this->set(compact('styles'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Effect->id = $id;
		if (!$this->Effect->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'effect')));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Effect->delete()) {
			$this->Session->setFlash(__d('croogo', '%s deleted', __d('imagecache', 'Effect')), 'default', array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', '%s was not deleted', __d('imagecache', 'Effect')), 'default', array('class' => 'error'));
		return $this->redirect(array('action' => 'index'));
	}
}
