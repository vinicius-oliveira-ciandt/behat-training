Feature: Browser History

  Background:
    Given I am on the homepage

  Scenario:
    When I click "Articles" in the "header"
    Then I should see "Give it a go and grow your own herbs"
    And I refresh the page
    When I press browser back button
    Then I should see "Super easy vegetarian pasta bake"
    When I press browser forward button
    Then I should see "Give it a go and grow your own herbs"
