@contactus
Feature: As an Ecommerce store owner,

  Scenario: Fill in contact us form
    Given I am on the homepage
    And I follow "Contact us"
    When I fill in "message" with:
      """
      Dear,

      Its more than a week, I have not received my order 123454;

      Please update.

      Thanks,
      Tarun Goswami
      """
    Then I wait "10" seconds