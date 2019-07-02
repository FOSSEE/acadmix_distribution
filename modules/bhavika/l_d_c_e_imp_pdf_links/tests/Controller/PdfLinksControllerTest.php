<?php

namespace Drupal\l_d_c_e_imp_pdf_links\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the l_d_c_e_imp_pdf_links module.
 */
class PdfLinksControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "l_d_c_e_imp_pdf_links PdfLinksController's controller functionality",
      'description' => 'Test Unit for module l_d_c_e_imp_pdf_links and controller PdfLinksController.',
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
   * Tests l_d_c_e_imp_pdf_links functionality.
   */
  public function testPdfLinksController() {
    // Check that the basic functions of module l_d_c_e_imp_pdf_links.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
