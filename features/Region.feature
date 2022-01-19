Feature: Testing the region
  Scenario: test link in region
    Given I am on the homepage
    When I follow "Articles" in the "header"
    Then I should see "Give it a go and grow your own herbs"
