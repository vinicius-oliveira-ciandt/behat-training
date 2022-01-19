<?php

use Behat\Behat\Context\Context;
use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * Defines application features from the specific context.
 */
class JavascriptContext extends RawDrupalContext implements Context {

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
   */
  public function scrollAndLink($cssSelector) {
    $function = <<<JS
      (
        function()
        {
          document.querySelector("$cssSelector").scrollIntoView();
        }
      )
    JS;
    $this->getSession()->executeScript($function);

  }

}
