Feature:
  As a brewer
  I want to log in
  So that I can update the site

Scenario: Login
  Given I am on the page "login"
  When I fill in "username" with "nonpriv"
  And I fill in "password" with "user"
  And I press "submit"
  Then I should be on "/"
