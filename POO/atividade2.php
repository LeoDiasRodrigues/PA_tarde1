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

    function re() {
        echo $this->modelo . " está dando ré<br>";
    }

    function virar() {
        echo $this->modelo . " está virando<br><br>";
    }
    
}

    class CarroRua extends Automovel {

    public function tipo(): string {
        return "Carro de rua";
    }
}

class CarroEsportivo extends Automovel {

    public function tipo(): string {
        return "Carro Esportivo";
    }
}

$jetta = new Automovel("Jetta", 2020, 150);
$jetta->acelerar();
$jetta->re();
$jetta->virar();

$moto = new Automovel("CG 150", 2014, 15);
$moto->acelerar();
$moto->re();
$moto->virar();


$onibus = new Automovel("Mercedes", 2010, 250);
$onibus->acelerar();
$onibus->re();
$onibus->virar();









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

    function andando() {
        echo $this->nome . " está andando" . "<br><br>";
    }
}

$cachorro = new Animal("Mamífero", 7, "Max");
$cachorro->mostrarEspecie();
$cachorro->andando();

$hiena = new Animal("Mamífero", 5, "Sheilo");
$hiena->mostrarEspecie();
$hiena->andando();

$taturana = new Animal("Taturana", 1, "Taturana");
$taturana->mostrarEspecie();
$taturana->andando();


?>


