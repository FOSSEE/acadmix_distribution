<?php

namespace Drupal\company\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CompanyController.
 */
class CompanyController extends ControllerBase {

  /**
   * Company.
   *
   * @return string
   *   Return Hello string.
   */
  public function company() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: company')
    ];
  }

}
