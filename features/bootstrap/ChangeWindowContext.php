<?php

use Behat\Behat\Context\Context;
use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * Defines application features from the specific context.
 */
class ChangeWindowContext extends RawDrupalContext implements Context {

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
   * @When /^I click on the facebook icon$/
   */
  public function iClickOnButton() {
    $page = $this->getSession()->getPage();
    $page->find('css', 'li.facebook')->click();
  }

  /**
   * @Then /^I switch to windows$/
   */
  public function iSwitchToWindows() {
    $names = $this->getSession()->getWindowNames();
    if (count($names) > 1) {
      $this->getSession()->switchToWindow($names[1]);
    }
  }

}
