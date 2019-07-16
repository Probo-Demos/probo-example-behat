<?php
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    /**
     * @Given I am logged in as a user with the :arg1 role
     */
    public function iAmLoggedInAsAUserWithTheRole($arg1)
    {
        //throw new PendingException();
    }
    /**
     * @Given I am on :arg1
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }
    /**
     * @Then I should see the link :arg1 in the :arg2 region
     */
    public function iShouldSeeTheLinkInTheRegion($arg1, $arg2)
    {
        throw new PendingException();
    }
    /**
     * @Given I am not logged in
     */
    public function iAmNotLoggedIn()
    {
        throw new PendingException();
    }
}
