<?php
/**
 * Effect Fixture
 */
class EffectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'style_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'effect' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'configuration' => array('type' => 'binary', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'style_id' => 1,
			'effect' => 'Lorem ipsum dolor sit amet',
			'configuration' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-06-04 11:31:32',
			'updated' => '2016-06-04 11:31:32'
		),
	);

}
