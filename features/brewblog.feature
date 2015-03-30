Feature:
  As a visitor
  I want to see brewblogs
  So that I can see information about batches of beer

Scenario: Visit Brewblog list page
  When I am on the page "brewBlogList"
  Then I should see "Sample Log #3"
  And I should see "Sample Log #1"
  And I should see "Sample Log #2"

Scenario: Click through to Brewblog
  Given I am on the page "brewBlogList"
  When I follow "Sample Log #3"
  Then I should see "Sample Log #3"
  And I should be on the page "brewBlogDetail"

Scenario: Recipe specifics
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Brew Date:"
  And I should see "August 1, 2009"
  And I should see "Target OG:"
  And I should see "1.068"
  And I should see "92.2% (A) / 75.3% (R)"

Scenario: Equipment profile
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Equipment Profile"
  And I should see "12.00 gallons"
  And I should see "Converted 15.5 gallon/59 liter keg boil kettle for full boil with a 10 gallon/38 liter cooler as a mash/lauter tun."

Scenario: Mash Profile
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Mash Profile"
  And I should see "Single Step Temperature Mash, Light Bodied Beer"
  And I should see "Mash with a direct heat source to maintain temperature."
  And I should see "Efficiency: 79.5%"

Scenario: Water Profile
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Water Profile"
  And I should see "Denver, Colorado"
  And I should see "Calicum: 31.5 ppm"
  And I should see "Chloride: 23.5 ppm"
  And I should see "PH: 7.8%"

Scenario: Fermentation
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Fermentation"
  And I should see "Primary: 7 days @ 72"
  And I should see "Secondary: 7 days @ 70"
  And I should see "Age: 45 days @ 61"

Scenario: Status
  Given I am on the page "brewBlogDetail&filter=admin&id=1"
  Then I should see "Brew Status"
  And I should see "Sample Log #2 Bottled"
