<?php

namespace MasterMind;

use PHPUnit\Framework\TestCase;
require 'MasterMind.php';

class MasterMindTest extends TestCase
{

    public function testGetScore()
    {
        $mastermind = new MasterMind();
        $this->assertEquals([0,0], $mastermind->getScore(['purple','orange','pink','yellow']));
        $this->assertEquals([2,0], $mastermind->getScore(['red','blue','green','pink']));
        $this->assertEquals([0,1], $mastermind->getScore(['blue','orange','pink','yellow']));
        $this->assertEquals([2,1], $mastermind->getScore(['red','blue','green','black']));
        $this->assertEquals([2,1], $mastermind->getScore(['red','blue','green','black']));
        $this->assertEquals('win', $mastermind->getScore(['blue','green','white','black']));

    }
}
