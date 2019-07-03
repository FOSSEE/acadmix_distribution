<?php

namespace Drupal\department\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DepartmentController.
 */
class DepartmentController extends ControllerBase {

  /**
   * Department.
   *
   * @return string
   *   Return Hello string.
   */
  public function department() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: department')
    ];
  }

}
