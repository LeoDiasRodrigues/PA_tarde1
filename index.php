<?php

class Automovel {
    public $modelo;
    public $ano;
    public $motor;

    function __construct(string $modelo, int $ano, float $motor) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->motor = $motor;
    }

    function acelerar() {
        echo $this->modelo . " está acelerando<br>";
    }
}

$jetta = new Automovel("Jetta", 2020, 150);
$jetta->acelerar();

$moto = new Automovel("CG 150", 2014, 15);
$moto->acelerar();

$onibus = new Automovel("Mercedes", 2010, 250);
$onibus->acelerar();








class Animal {
    public $especie;
    public $idade;
    public $nome;

    function __construct(string $especie, int $idade, string $nome) {
        $this->especie = $especie;
        $this->idade = $idade;
        $this->nome = $nome;
    }

    function mostrarEspecie() {
        echo $this->nome . " é da espécie: " . $this->especie . "<br>";
    }
}

$cachorro = new Animal("Mamífero", 7, "Max");
$cachorro->mostrarEspecie();

$hiena = new Animal("Mamífero", 5, "Sheilo");
$hiena->mostrarEspecie();

$taturana = new Animal("Taturana", 1, "Taturana");
$taturana->mostrarEspecie();






class Filme {
    public $nome;
    public $ano;
    public $genero;

    function __construct(string $nome, int $ano, string $genero) {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->genero = $genero;
    }

    function mostrarGenero() {
        echo $this->nome . " é do gênero: " . $this->genero . "<br>";
    }
}

$vingadores = new Filme("Vingadores", 2019, "Ação");
$vingadores->mostrarGenero();

$titanic = new Filme("Titanic", 1997, "Drama");
$titanic->mostrarGenero();

$homemAranha = new Filme("Homem-Aranha", 2022, "Ação");
$homemAranha->mostrarGenero();

?>


