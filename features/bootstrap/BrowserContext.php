<?php

use Behat\Behat\Context\Context;
use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * Defines application features from the specific context.
 */
class BrowserContext extends RawDrupalContext implements Context {

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
   * @When /^I refresh the page$/
   */
  public function iRefreshThePage() {
    $this->getSession()->reload();
  }

  /**
   * @When /^I press browser back button$/
   */
  public function iPressBrowserBackButton() {
    $this->getSession()->back();
  }

  /**
   * @When /^I press browser forward button$/
   */
  public function iPressBrowserForwardButton() {
    $this->getSession()->forward();
  }

}
