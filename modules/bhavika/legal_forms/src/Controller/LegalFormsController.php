<?php

namespace Drupal\legal_forms\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class LegalFormsController.
 */
class LegalFormsController extends ControllerBase {

  /**
   * Legal_forms.
   *
   * @return string
   *   Return Hello string.
   */
  public function legal_forms() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: legal_forms')
    ];
  }

}
