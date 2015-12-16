<?php

/**
 * Created by PhpStorm.
 * User: pueppi
 * Date: 15.12.15
 * Time: 19:30
 */
namespace DiceGame;

use Doctrine\ORM\Mapping as ORM;

class DiceGame
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $playerOne;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $playerTwo;

    /**
     * DiceGame constructor.
     * @param string $playerOne
     * @param string $playerTwo
     */
    public function __construct($playerOne = "Spieler1", $playerTwo = "Spieler2")
    {
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
    }

    /**
     * @return string
     */
    public function getPlayerTwo()
    {
        return $this->playerTwo;
    }

    /**
     * @param string $playerTwo
     */
    public function setPlayerTwo($playerTwo)
    {
        $this->playerTwo = $playerTwo;
    }

    /**
     * @return string
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    /**
     * @param string $playerOne
     */
    public function setPlayerOne($playerOne)
    {
        $this->playerOne = $playerOne;
    }


}