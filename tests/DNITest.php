<?php

use PHPUnit\Framework\TestCase;
use \App\DNI; 

class DNITest extends TestCase
{
    public function testVerDNI(){
        $dni = new DNI('12345678');
        $resultado = $dni->getDNIConLetra();
        $this->assertIsNotInt($resultado);
    }
}
