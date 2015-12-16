<?php

/**
 * Created by PhpStorm.
 * User: pueppi
 * Date: 16.12.15
 * Time: 08:12
 */
namespace DiceGame\Tests;

use DiceGame\DiceGame;

class DiceGameTest extends \PHPUnit_Framework_TestCase
{
    /** @test */

        public function hasPlayerOne()
        {
            $game = new DiceGame();
            $this->assertObjectHasAttribute("playerOne", $game);
        }
}
