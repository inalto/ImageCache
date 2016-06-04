<?php
App::uses('Style', 'ImageCache.Model');

/**
 * Style Test Case
 */
class StyleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.image_cache.style',
		'plugin.image_cache.effect'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Style = ClassRegistry::init('ImageCache.Style');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Style);

		parent::tearDown();
	}

}
