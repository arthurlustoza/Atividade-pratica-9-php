<?php

namespace Tests;

use App\Retangulo;
use PHPUnit\Framework\TestCase;

class RetanguloTest extends TestCase
{
    public function testArea()
    {
        $retangulo = new Retangulo(4, 5);
        $this->assertEquals(20, $retangulo->area());
    }

    public function testPerimetro()
    {
        $retangulo = new Retangulo(4, 5);
        $this->assertEquals(18, $retangulo->perimetro());
    }

    public function testEhQuadradoVerdadeiro()
    {
        $retangulo = new Retangulo(3, 3);
        $this->assertTrue($retangulo->ehQuadrado());
    }

    public function testEhQuadradoFalso()
    {
        $retangulo = new Retangulo(4, 5);
        $this->assertFalse($retangulo->ehQuadrado());
    }
}
