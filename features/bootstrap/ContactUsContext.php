<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * Defines application features from the specific context.
 */
class ContactUsContext extends RawDrupalContext implements Context {

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
   * @When I enter following detail in contact us form
   */
  public function iEnterFollowingDetailInContactUsForm(TableNode $table) {
    $page = $this->getSession()->getPage();
    foreach ($table as $row) {
      $name = $row['Your name'];
      $email = $row['Your email address'];
      $subject = $row['Subject'];

      $page->find('css', '#edit-name')->setValue($name);
      $page->find('css', '#edit-mail')->setValue($email);
      $page->find('css', '#edit-subject-0-value')->setValue($subject);
    }
  }

}
