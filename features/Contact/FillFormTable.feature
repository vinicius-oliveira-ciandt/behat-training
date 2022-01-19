@ContactUs
Feature: Test Contact Us functionality

  @datatable
  Scenario: Verify contact us functionality
    Given I am on the homepage
    When I follow "Contact"
    When I enter following detail in contact us form
      | Your name     | Your email address  | Subject       |
      | Tarun Goswami | goswami@gmail.com   | Test Subject  |
