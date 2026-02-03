<?php

use PHPUnit\Framework\TestCase;
use App\DNI; 

class DNITest extends TestCase
{
    public function testVerDNI(){
        $dni = new DNI();
        $resultado = $dni->getDNIConLetra();
        $this->assertContainsNotOnlyInt($resultado);
    }
}
