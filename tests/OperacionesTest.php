<?php
use PHPUnit\Framework\TestCase;

class TestOperaciones extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Operaciones();
    }

    public function testSum(){
        $this->assertEquals(7,$this->op->sum(2,5));
    }

    public function testResta(){
        $this->assertEquals(4,$this->op->resta(6,2));
    }

    public function testDivision(){
        $this->assertEquals(5,$this->op->division(10,2));
    }

    public function testMultiplicacion(){
        $this->assertEquals(81,$this->op->multi(9,9));
    }

}