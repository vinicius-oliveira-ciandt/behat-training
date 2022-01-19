@ContactUs
Feature: Check link

  Check if link Contact is on the footer

  Background:
    Given I am on the homepage

  @scroll
  Scenario:
    And I click on contact button
    Then I should see "Website feedback"

  Scenario:
    And I follow "Contact" in the "footer"
    Then I should see "Website feedback"
