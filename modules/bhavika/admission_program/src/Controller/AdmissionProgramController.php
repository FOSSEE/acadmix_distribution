<?php

namespace Drupal\admission_program\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AdmissionProgramController.
 */
class AdmissionProgramController extends ControllerBase {

  /**
   * Admission_program.
   *
   * @return string
   *   Return Hello string.
   */
  public function admission_program() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: admission_program')
    ];
  }

}
