Feature:
  As a brewer
  I want to see when I need to move my beer
  So that I can plan my schedule

Scenario: View beer in calendar
  Given: I am on the calendar page for "July, 2009"
  Then: I should see "Brew:"
  And: I should see "Sample Lo..."