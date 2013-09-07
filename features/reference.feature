Feature:
  As a brewer
  I want to use the site's reference data
  So that I can get the latest information

  Scenario: Color
    Given I am on the page "reference"
    When I follow "Color Chart"
    Then I should be on the page "reference"
    And I should be on the section "color"
    And I should see "13/26"
    And I should see "1/2"
    And I should see "30/59"

  Scenario: Style Information
    Given I am on the page "reference"
    When I follow "BJCP Style Information"
    Then I should be on the page "reference"
    And I should be on the section "styles"
    And I should see "Lite American Lager"
    And I should see "A malty, fruity, aged, somewhat sour Belgian-style brown ale."
    And I should see "Commercial Examples: [US] Red Barn Cider Fire Barrel (WA), AEppelTreow Pear Wine and Sparrow Spiced Cider (WI)."

  Scenario: Hops
    Given I am on the page "reference"
    When I follow "Hops"
    Then I should be on the page "reference"
    And I should be on the section "hops"
    And I should see "Admiral"
    And I should see "Pleasant, spicy, mild, noble, earthy aroma."
    And I should see "Zeus"

  Scenario: Grains
    Given I am on the page "reference"
    When I follow "Malts and Grains"
    Then I should be on the page "reference"
    And I should be on the section "grains"
    And I should see "Scottish Peated Malt"
    And I should see "Crystal Malt 20L"
    And I should see "Use in all types to adjust color and add nutty, toasted flavor. Chocolate flavor."


  Scenario: Yeast
    Given I am on the page "reference"
    When I follow "Yeast"
    Then I should be on the page "reference"
    And I should be on the section "yeast"
    And I should see "Brewferm Blanche"
    And I should see "Flocculation:"
    And I should see "Wyeast Wyeast Lager Blend - 2178"