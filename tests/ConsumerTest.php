<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
$consumer = new Dummy();
$consumer->setNombre('Nicolás');
$consumer->setApellido('Sogbi');
$result = $consumer->nombreCompleto();
$this->assertEquals('Nicolás Sogbi', $result);
    }

    /**
    * Probar email válido
    */
    public function testEmail()
    {

    }
}
