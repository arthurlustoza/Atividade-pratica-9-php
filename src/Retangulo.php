<?php

namespace App;

class Retangulo
{
    public $largura;
    public $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    // calcula a area
    public function area()
    {
        return $this->largura * $this->altura;
    }

    // calcula o perimetro
    public function perimetro()
    {
        return 2 * ($this->largura + $this->altura);
    }

    // ve se e quadrado
    public function ehQuadrado()
    {
        if ($this->largura == $this->altura) {
            return true;
        }
        return false;
    }
}
