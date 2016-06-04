<?php
$this->viewVars['title_for_layout'] = __d('image_cache', 'Effects');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('image_cache', 'Effects'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->request->data['Effect']['id'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = __d('image_cache', 'Effects') . ': ' . $this->request->data['Effect']['id'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

$this->append('form-start', $this->Form->create('Effect'));

$this->append('tab-heading');
	echo $this->Croogo->adminTab(__d('image_cache', 'Effect'), '#effect');
	echo $this->Croogo->adminTabs();
$this->end();

$this->append('tab-content');

	echo $this->Html->tabStart('effect');

		echo $this->Form->input('id');

		echo $this->Form->input('style_id', array(
			'label' =>  __d('image_cache', 'Style'),
		));
		echo $this->Form->input('effect', array(
			'label' =>  __d('image_cache', 'Effect'),
		));
		echo $this->Form->input('configuration', array(
			'label' =>  __d('image_cache', 'Configuration'),
		));

	echo $this->Html->tabEnd();

	echo $this->Croogo->adminTabs();

$this->end();

$this->append('panels');
	echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
		$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
		$this->Form->button(__d('croogo', 'Save'), array('button' => 'primary')) .
		$this->Form->button(__d('croogo', 'Save & New'), array('button' => 'success', 'name' => 'save_and_new')) .
		$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('button' => 'danger'));
	echo $this->Html->endBox();

	echo $this->Croogo->adminBoxes();
$this->end();

$this->append('form-end', $this->Form->end());
