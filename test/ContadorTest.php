<?php
use PHPUnit\Framework\TestCase;
use Bolos\Contador;

class ContadorTest extends TestCase
{
    public function testIfStrike(){
        
        $ifStrike = new Contador();
        $this->assertEquals('strike',$ifStrike->checkIfStrike());
        
    }
    public function testIfNoStrike(){
       
        $ifNoStrike = new Contador();
        $this->assertEquals('nostrike', $ifNoStrike->checkIfNoStrike());
        
    }
}