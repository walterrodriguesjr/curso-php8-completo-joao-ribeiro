<?php

class ClasseTeste
{
    public $publica = 'a';
    protected $protegida = 'b';
    private $privada = 'c';


    function teste()
    {
        echo $this->privada . "<br>";
    }

}
class ClasseDerivada extends ClasseTeste
{
    function testeDerivada()
    {
       echo $this->publica;
       echo $this->protegida;
       /* echo $this->privada; */
    }
}

$a = new ClasseTeste;
echo $a->teste() . "<br>";

