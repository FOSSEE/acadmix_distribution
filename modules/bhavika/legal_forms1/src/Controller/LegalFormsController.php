<?php

namespace Drupal\legal_forms1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class LegalFormsController.
 */
class LegalFormsController extends ControllerBase {

  /**
   * Legalforms.
   *
   * @return string
   *   Return Hello string.
   */
  public function legalforms() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: legalforms')
    ];
  }

}
