<?php

namespace Drupal\photo_gallery\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PhotoGalleryController.
 */
class PhotoGalleryController extends ControllerBase {

  /**
   * Photo_gallery.
   *
   * @return string
   *   Return Hello string.
   */
  public function photo_gallery() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: photo_gallery')
    ];
  }

}
