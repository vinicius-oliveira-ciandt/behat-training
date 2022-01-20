@ContactUs
Feature: Test Contact Us functionality

  @datatable
  Scenario: Verify contact us functionality
    Given I am on the homepage
    When I follow "Contact"
    When I enter following detail in contact us form
      | Your name     | Your email address  | Subject       |
      | Tarun Goswami | goswami@gmail.com   | Test Subject  |

  Scenario: Verify contact us with message
    Given I am on the homepage
    When I follow "Contact"
    Then I fill in "Your name" with "admin"
    Then I fill in "Your email address" with "admin@mail.com"
    Then I fill in "Subject" with "Subject"
    Then I fill in "Message" with:
      """
      Dear,

      Its more than a week, I have not received my orer 234234234.

      Please update.

      Thanks,
      Tarun
      """
