<?php

namespace Drupal\legal_forms\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the legal_forms module.
 */
class LegalFormsControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "legal_forms LegalFormsController's controller functionality",
      'description' => 'Test Unit for module legal_forms and controller LegalFormsController.',
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
   * Tests legal_forms functionality.
   */
  public function testLegalFormsController() {
    // Check that the basic functions of module legal_forms.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
