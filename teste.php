<?php 

trait Acoes 
{
    function falar($fala){
        echo "Ele disse: $fala";
    }

    function andar($passos){
        echo "Ele deu $passos passos";
    }
}

class Humano
{
    use Acoes;
}

$obj = new Humano();
$obj->falar("Bom dia!");
echo "<br>";
$obj->andar(20);
