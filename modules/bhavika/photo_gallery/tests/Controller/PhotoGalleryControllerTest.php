<?php

namespace Drupal\photo_gallery\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the photo_gallery module.
 */
class PhotoGalleryControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "photo_gallery PhotoGalleryController's controller functionality",
      'description' => 'Test Unit for module photo_gallery and controller PhotoGalleryController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests photo_gallery functionality.
   */
  public function testPhotoGalleryController() {
    // Check that the basic functions of module photo_gallery.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
