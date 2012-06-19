<?php
include '../Mine.php';
class DiamondTest extends PHPUnit_Framework_TestCase
{
    public function testMine1()
    {
        $mine = new Mine('');
        $this->assertEquals(0, $mine->getDiamonds());
    }

    public function testMine2()
    {
        $mine = new Mine('<>');
        $this->assertEquals(1, $mine->getDiamonds());
    }

    public function testMine3()
    {
        $mine = new Mine('<<>>');
        $this->assertEquals(2, $mine->getDiamonds());
    }

    public function testMine4()
    {
        $mine = new Mine('<><<>><<');
        $this->assertEquals(3, $mine->getDiamonds());
    }
}