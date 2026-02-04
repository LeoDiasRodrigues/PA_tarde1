<?php

abstract class Carro {
    protected string $marca;
    protected string $nome;
    protected string $modelo;
    protected int $velocidade = 0;

    public function __construct(string $marca, string $nome, string $modelo) {
        $this->marca  = $marca;
        $this->nome   = $nome;
        $this->modelo = $modelo;
    }

    abstract public function tipo(): string;

    public function andar(): void {
        $this->velocidade += 20;
        echo "{$this->nome} está andando a {$this->velocidade} km/h<br>";
    }

    public function virar(string $lado): void {
        echo "{$this->nome} virou para a {$lado}<br>";
    }

    public function frear(): void {
        $this->velocidade = 0;
        echo "{$this->nome} freou e parou<br>";
    }

    public function info(): void {
        echo "Marca: {$this->marca}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Modelo: {$this->modelo}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}


class CarroCasual extends Carro {
    public function tipo(): string {
        return "Carro de rua";
    }
}

class Moto extends Carro {
    public function tipo(): string {
        return "Moto esportiva";
    }

    public function andar(): void {
        $this->velocidade += 50;
        echo "{$this->nome} acelerou forte! {$this->velocidade} km/h<br>";
    }
}

class Onibus extends Carro {
    public function tipo(): string {
        return "Ônibus";
    }
}


$jetta = new CarroCasual("Volkswagen", "Jetta", "2020");
$cg = new Moto("Honda", "CG 150", "2018");
$onibus = new Onibus("Mercedes", "Ônibus Urbano", "2020");

$jetta->info();
$jetta->andar();
$jetta->virar("esquerda");
$jetta->frear();

echo "<hr>";

$cg->info();
$cg->andar();
$cg->virar("direita");
$cg->frear();

echo "<hr>";

$onibus->info();
$onibus->andar();
$onibus->virar("direita");
$onibus->frear();

echo "<hr><hr>";


abstract class Animal {
    protected string $especie;
    protected int $idade;
    protected string $nome;

    public function __construct(string $especie, int $idade, string $nome) {
        $this->especie = $especie;
        $this->idade = $idade;
        $this->nome = $nome;
    }

    abstract public function tipo(): string;

    public function mostrarEspecie(): void {
        echo "{$this->nome} é da espécie: {$this->especie}<br>";
    }

    public function andando(): void {
        echo "{$this->nome} está andando<br>";
    }

    public function info(): void {
        echo "Espécie: {$this->especie}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Idade: {$this->idade}<br>";
        echo "Tipo: {$this->tipo()}<br><br>";
    }
}


class Cachorro extends Animal {
    public function tipo(): string {
        return "Cachorro";
    }
}

class Gato extends Animal {
    public function tipo(): string {
        return "Gato";
    }
}

class Hiena extends Animal {
    public function tipo(): string {
        return "Hiena";
    }
}


$cachorro = new Cachorro("Mamífero", 7, "Rex");
$gato = new Gato("Mamífero", 3, "Mingau");
$hiena = new Hiena("Mamífero", 5, "Sheila");

$cachorro->info();
$cachorro->mostrarEspecie();
$cachorro->andando();

echo "<hr>";

$gato->info();
$gato->mostrarEspecie();
$gato->andando();

echo "<hr>";

$hiena->info();
$hiena->mostrarEspecie();
$hiena->andando();

abstract class Filme {
    protected string $nome;
    protected int $ano;

    public function __construct(string $nome, int $ano) {
        $this->nome = $nome;
        $this->ano = $ano;
    }

    // método abstrato
    abstract public function genero(): string;

    public function mostrarGenero(): void {
        echo "{$this->nome} é do gênero: {$this->genero()}<br>";
    }

    public function mostrarAno(): void {
        echo "{$this->nome} é do ano: {$this->ano}<br><br>";
    }
}

echo "<hr>";echo "<hr>";

class FilmeAcao extends Filme {
    public function genero(): string {
        return "Ação";
    }
}

class FilmeDrama extends Filme {
    public function genero(): string {
        return "Drama";
    }
}

class FilmeAventura extends Filme {
    public function genero(): string {
        return "Aventura";
    }
}

$vingadores = new FilmeAcao("Vingadores Ultimato", 2019);
$vingadores->mostrarGenero();
$vingadores->mostrarAno();

$titanic = new FilmeDrama("Titanic", 1997);
$titanic->mostrarGenero();
$titanic->mostrarAno();

$homemAranha = new FilmeAventura("Homem-Aranha", 2022);
$homemAranha->mostrarGenero();
$homemAranha->mostrarAno();

