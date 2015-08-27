Feature:
  As a visitor
  I want to see the about page
  So that I can learn about the brewer

  Scenario: Visit About page
    When I am on the page "about"
    Then I should see "Dr. Joe B. Brewer II"
    And I should see "Anytown, Colorado USA"

  Scenario: Links List
    When I am on the page "about"
    Then I should see "Beer Judge Certification Program (BJC..."
    And I should see "BrewBlogger"
    And I should see "John Palmer's How To Brew On..."