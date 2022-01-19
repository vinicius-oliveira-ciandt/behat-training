# language: en
Feature: Language Login
  Scenario: My First Login as Admin in English site
    Given I am on the homepage
    When I follow "English"
    Then I should see "Log in"
    Then I follow "Log in"
    Then I fill in "edit-name" with "admin"
    Then I fill in "edit-pass" with "admin"

