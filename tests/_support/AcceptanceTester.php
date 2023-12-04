<?php

namespace Psalm\MockeryPlugin\Tests;

/**
 * @psalm-api
 *
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method static execute($callable)
 * @method static expectTo($prediction)
 * @method static expect($prediction)
 * @method static amGoingTo($argumentation)
 * @method static am($role)
 * @method static lookForwardTo($achieveValue)
 * @method static comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */
}
