<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Testwork\Hook\Scope\AfterSuiteScope;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;
use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements Context {

  /**
   * Initializes context.
   *
   * Every scenario gets its own context instance.
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {
  }

  /**
   * @BeforeSuite
   */
  public static function beforeSuite(BeforeSuiteScope $scope) {
    echo "Before Suite executed!";
  }

  /**
   * @BeforeFeature
   */
  public static function beforeFeature() {
    echo "Before Feature executed!";
  }

  /**
   * @AfterSuite
   */
  public static function afterSuite(AfterSuiteScope $scope) {
    echo "After Suite executed!";
  }

  /**
   * @AfterFeature
   */
  public static function afterFeature() {
    echo "After Feature executed!";
  }

  /**
   * @Given I click on contact button
   */
  public function iClickOnContactButton() {
    $page = $this->getSession()->getPage();
    $page->find('css', 'a[href="/en/contact"]')->click();
  }

}
