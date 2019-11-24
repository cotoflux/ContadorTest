<?php 
namespace Bolos;

class Contador
{
    public $tirada;

    public function checkIfStrike()
    {
            return "strike";
        
    }

    public function checkIfNoStrike()
    {
            return 'nostrike';
    }

    public function ifStrikeReturnDoublePoints()
    {
        
            return 'doublePoints';
        

    }
}