<?php 

class Humano
{

    private $idade = 0;

    function SetIdade($valor)
    {
        if(is_numeric($valor)){
            $this->idade = $valor;
        }else{
            echo "Você precisa passar um valor numérido!" . "<br>";
        }
    }

    function getIdade()
    {
        return $this->idade;
    }
}

$obj = new Humano();
$obj->SetIdade(38);
echo $obj->getIdade();

