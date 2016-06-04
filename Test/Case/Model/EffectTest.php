<?php
App::uses('Effect', 'ImageCache.Model');

/**
 * Effect Test Case
 */
class EffectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.image_cache.effect',
		'plugin.image_cache.style'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Effect = ClassRegistry::init('ImageCache.Effect');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Effect);

		parent::tearDown();
	}

}
