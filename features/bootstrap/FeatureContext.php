<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException,
    Behat\MinkExtension\Context\MinkContext,
    Behat\Mink\Exception\ExpectationException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * Opens specified regular brewblogger page (not URL).
     *
     * @Given /^(?:|I )am on the page "(?P<page>[^"]+)"$/
     * @When /^(?:|I )go to the page "(?P<page>[^"]+)"$/
     */
    public function goToBrewBloggerPage($page)
    {
        $this->getSession()->visit($this->locatePath("index.php?page=" . $page));
    }

    /**
     * Goes to a date in the calendar
     *
     * @Given /^(?:|I )am on the calendar page for "(?P<date>[^"]+)"$/
     * @When /^(?:|I )go to the calendar page for "(?P<date>[^"]+)"$/
     */
    public function goToCalendarDate($date)
    {
        $unixTime = strtotime($date);
        $this->getSession()->visit($this->locatePath("index.php?page=calendar&date=" . $unixTime));
    }

    /**
     * Checks, that current page page is the one in the route (not URL).
     *
     * @Then /^(?:|I )should be on the page "(?P<page>[^"]+)"$/
     */
    public function assertBrewBloggerPage($page)
    {
        $actual = $this->getSession()->getCurrentUrl();
        $params = parse_url($actual, PHP_URL_QUERY);
        parse_str($params, $paramsArr);
        if (!isset($paramsArr['page']) || ($paramsArr['page'] == $page)) {
            $message = sprintf("Current BrewBlogger page %s not found in current url %s\nparams: %s", $page, $actual, print_r($paramsArr, true) );
            throw new ExpectationException($message, $this->getSession());
        }
    }

    /**
     * @Given /^I should be on the section "([^"]*)"$/
     */
    public function iShouldBeOnTheSection($section)
    {
        $actual = $this->getSession()->getCurrentUrl();
        $params = parse_url($actual, PHP_URL_QUERY);
        parse_str($params);
        if (!isset($params['section']) || ($params['section'] == $section)) {
            $message = sprintf("Current BrewBlogger section %s not found in current url %s", $section, $actual);
            throw new ExpectationException($message, $this->getSession());
        }
    }

    /**
     * @Given /^there are no awards$/
     */
    public function thereAreNoAwards()
    {
        // Nothing to do here yet
    }
}
