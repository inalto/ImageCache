<?php
App::uses('ImageCacheAppModel', 'ImageCache.Model');
/**
 * Effect Model
 *
 * @property Style $Style
 */
class Effect extends ImageCacheAppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Style' => array(
			'className' => 'Style',
			'foreignKey' => 'style_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
