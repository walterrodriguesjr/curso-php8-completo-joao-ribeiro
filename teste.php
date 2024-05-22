<?php

class Dados
{
    private $nome;
    private $sobreNome;
    private $cidade;

    public function __construct($a, $b, $c)
    {
        $this->nome = $a;
        $this->sobreNome = $b;
        $this->cidade = $c;
    }

    function coletarDados()
    {
        return "Meu nome é $this->nome, meu sobrenome é $this->sobreNome e moro na cidade de $this->cidade";
    }
}
$nome = "Walter";
$sobrenome = "Rodrigues";
$cidade = "Curitiba";

$dados = new Dados($nome, $sobrenome, $cidade);

echo $dados->coletarDados();
