<?php

namespace Drupal\l_d_c_e_imp_pdf_links\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class PdfLinksController.
 */
class PdfLinksController extends ControllerBase {

  /**
   * Ldce_imp_pdf_links.
   *
   * @return string
   *   Return Hello string.
   */
  public function ldce_imp_pdf_links() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: ldce_imp_pdf_links')
    ];
  }

}
