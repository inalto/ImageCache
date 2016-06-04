<?php
App::uses('ImageCacheAppController', 'ImageCache.Controller');
/**
 * Styles Controller
 *
 * @property Style $Style
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class StylesController extends ImageCacheAppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Style->recursive = 0;
		$this->set('styles', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Style->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'style')));
		}
		$options = array('conditions' => array('Style.' . $this->Style->primaryKey => $id));
		$this->set('style', $this->Style->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Style->create();
			if ($this->Style->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__d('croogo', '%s has been saved', __d('imagecache', 'style')), 'default', array('class' => 'success'));
				$redirectTo = array('action' => 'index');
				if (isset($this->request->data['apply'])) {
					$redirectTo = array('action' => 'edit', $this->Style->id);
				}
				if (isset($this->request->data['save_and_new'])) {
					$redirectTo = array('action' => 'add');
				}
				return $this->redirect($redirectTo);
			} else {
				$this->Session->setFlash(__d('croogo', '%s could not be saved. Please, try again.', __d('imagecache', 'style')), 'default', array('class' => 'error'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Style->exists($id)) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'style')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Style->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__d('croogo', '%s has been saved', __d('imagecache', 'style')), 'default', array('class' => 'success'));
				$redirectTo = array('action' => 'index');
				if (isset($this->request->data['apply'])) {
					$redirectTo = array('action' => 'edit', $id);
				}
				if (isset($this->request->data['save_and_new'])) {
					$redirectTo = array('action' => 'add');
				}
				return $this->redirect($redirectTo);
			} else {
				$this->Session->setFlash(__d('croogo', '%s could not be saved. Please, try again.', __d('imagecache', 'style')), 'default', array('class' => 'error'));
			}
		} else {
			$options = array('conditions' => array('Style.' . $this->Style->primaryKey => $id));
			$this->request->data = $this->Style->find('first', $options);
		}
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
		$this->Style->id = $id;
		if (!$this->Style->exists()) {
			throw new NotFoundException(__d('croogo', 'Invalid %s', __d('imagecache', 'style')));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Style->delete()) {
			$this->Session->setFlash(__d('croogo', '%s deleted', __d('imagecache', 'Style')), 'default', array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__d('croogo', '%s was not deleted', __d('imagecache', 'Style')), 'default', array('class' => 'error'));
		return $this->redirect(array('action' => 'index'));
	}
}
