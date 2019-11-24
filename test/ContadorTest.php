<?php
use PHPUnit\Framework\TestCase;
use Bolos\Contador;

class ContadorTest extends TestCase
{
    public function testIfStrike(){
        
        $ifStrike = new Contador();
        $result = 'strike';
        $this->assertEquals($result,$ifStrike->checkIfStrike());
        
    }
    public function testIfNoStrike(){
       
        $ifNoStrike = new Contador();
        $result = 'nostrike';
        $this->assertEquals($result, $ifNoStrike->checkIfNoStrike());
        
    }


    public function testIfPointsAreDoubledBecauseStrike()
    {
        $ifStrikeDouble = new Contador();
        $expectedReturn = $ifStrikeDouble->ifStrikeReturnDoublePoints();
        $weExpect = 'doublePoints';
        $this->assertEquals($weExpect, $expectedReturn);
    }
}