<?php 

// Classe abstrata Carro
abstract class Carro {
    // Propriedades protegidas
    protected string $marca; // Marca do carro
    protected string $nome;  // Nome do carro
    protected string $modelo; // Modelo do carro
    protected int $velocidade = 0; // Velocidade inicial do carro é 0

    // Construtor da classe Carro
    public function __construct(string $marca, string $nome, string $modelo) {
        $this->marca  = $marca;  // Inicializa a marca
        $this->nome   = $nome;   // Inicializa o nome
        $this->modelo = $modelo; // Inicializa o modelo
    }

    // Método abstrato que deve ser implementado pelas classes filhas
    abstract public function tipo(): string;

    // Método para fazer o carro andar
    public function andar(): void {
        $this->velocidade += 20; // Aumenta a velocidade em 20 km/h
        echo "{$this->nome} está andando a {$this->velocidade} km/h<br>"; // Exibe a velocidade atual
    }

    // Método para fazer o carro virar
    public function virar(string $lado): void {
        echo "{$this->nome} virou para a {$lado}<br>"; // Exibe a direção que o carro virou
    }

    // Método para fazer o carro frear
    public function frear(): void {
        $this->velocidade = 0; // Reseta a velocidade para 0
        echo "{$this->nome} freou e parou<br>"; // Exibe que o carro parou
    }

    // Método que exibe as informações do carro
    public function info(): void {
        echo "Marca: {$this->marca}<br>"; // Exibe a marca
        echo "Nome: {$this->nome}<br>"; // Exibe o nome
        echo "Modelo: {$this->modelo}<br>"; // Exibe o modelo
        echo "Tipo: {$this->tipo()}<br><br>"; // Exibe o tipo do carro (método abstrato)
    }
}

// Classe CarroCasual que estende a classe Carro
class CarroCasual extends Carro {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Carro de rua"; // Retorna o tipo "Carro de rua"
    }
}

// Classe Moto que estende a classe Carro
class Moto extends Carro {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Moto esportiva"; // Retorna o tipo "Moto esportiva"
    }

    // Sobrescrita do método andar() para aumentar a velocidade em 50 km/h
    public function andar(): void {
        $this->velocidade += 50; // Aumenta a velocidade em 50 km/h
        echo "{$this->nome} acelerou forte! {$this->velocidade} km/h<br>"; // Exibe a velocidade atual
    }
}

// Classe Onibus que estende a classe Carro
class Onibus extends Carro {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Ônibus"; // Retorna o tipo "Ônibus"
    }
}

// Criando instâncias dos carros e realizando ações com eles
$jetta = new CarroCasual("Volkswagen", "Jetta", "2020");
$cg = new Moto("Honda", "CG 150", "2018");
$onibus = new Onibus("Mercedes", "Ônibus Urbano", "2020");

// Exibindo informações e realizando ações com o Jetta
$jetta->info(); // Exibe as informações do Jetta
$jetta->andar(); // Faz o Jetta andar
$jetta->virar("esquerda"); // Faz o Jetta virar à esquerda
$jetta->frear(); // Faz o Jetta frear

echo "<hr>"; // Linha de separação

// Exibindo informações e realizando ações com a moto CG 150
$cg->info(); // Exibe as informações da moto
$cg->andar(); // Faz a moto andar
$cg->virar("direita"); // Faz a moto virar à direita
$cg->frear(); // Faz a moto frear

echo "<hr>"; // Linha de separação

// Exibindo informações e realizando ações com o ônibus
$onibus->info(); // Exibe as informações do ônibus
$onibus->andar(); // Faz o ônibus andar
$onibus->virar("direita"); // Faz o ônibus virar à direita
$onibus->frear(); // Faz o ônibus frear

echo "<hr><hr>"; // Linha de separação para a próxima seção

// Classe abstrata Animal
abstract class Animal {
    // Propriedades protegidas
    protected string $especie; // Espécie do animal
    protected int $idade; // Idade do animal
    protected string $nome; // Nome do animal

    // Construtor da classe Animal
    public function __construct(string $especie, int $idade, string $nome) {
        $this->especie = $especie; // Inicializa a espécie
        $this->idade = $idade; // Inicializa a idade
        $this->nome = $nome; // Inicializa o nome
    }

    // Método abstrato que deve ser implementado pelas classes filhas
    abstract public function tipo(): string;

    // Método para exibir a espécie do animal
    public function mostrarEspecie(): void {
        echo "{$this->nome} é da espécie: {$this->especie}<br>"; // Exibe a espécie
    }

    // Método para mostrar que o animal está andando
    public function andando(): void {
        echo "{$this->nome} está andando<br>"; // Exibe a mensagem que o animal está andando
    }

    // Método para exibir as informações do animal
    public function info(): void {
        echo "Espécie: {$this->especie}<br>"; // Exibe a espécie
        echo "Nome: {$this->nome}<br>"; // Exibe o nome
        echo "Idade: {$this->idade}<br>"; // Exibe a idade
        echo "Tipo: {$this->tipo()}<br><br>"; // Exibe o tipo do animal (método abstrato)
    }
}

// Classes filhas de Animal

// Classe Cachorro que estende a classe Animal
class Cachorro extends Animal {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Cachorro"; // Retorna o tipo "Cachorro"
    }
}

// Classe Gato que estende a classe Animal
class Gato extends Animal {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Gato"; // Retorna o tipo "Gato"
    }
}

// Classe Hiena que estende a classe Animal
class Hiena extends Animal {
    // Implementação do método tipo()
    public function tipo(): string {
        return "Hiena"; // Retorna o tipo "Hiena"
    }
}

// Criando instâncias dos animais e realizando ações com eles
$cachorro = new Cachorro("Mamífero", 7, "Rex");
$gato = new Gato("Mamífero", 3, "Mingau");
$hiena = new Hiena("Mamífero", 5, "Sheila");

// Exibindo informações e realizando ações com o cachorro
$cachorro->info(); // Exibe as informações do cachorro
$cachorro->mostrarEspecie(); // Mostra a espécie do cachorro
$cachorro->andando(); // Faz o cachorro andar

echo "<hr>"; // Linha de separação

// Exibindo informações e realizando ações com o gato
$gato->info(); // Exibe as informações do gato
$gato->mostrarEspecie(); // Mostra a espécie do gato
$gato->andando(); // Faz o gato andar

echo "<hr>"; // Linha de separação

// Exibindo informações e realizando ações com a hiena
$hiena->info(); // Exibe as informações da hiena
$hiena->mostrarEspecie(); // Mostra a espécie da hiena
$hiena->andando(); // Faz a hiena andar

// Classe abstrata Filme
abstract class Filme {
    // Propriedades protegidas
    protected string $nome; // Nome do filme
    protected int $ano; // Ano de lançamento do filme

    // Construtor da classe Filme
    public function __construct(string $nome, int $ano) {
        $this->nome = $nome; // Inicializa o nome do filme
        $this->ano = $ano; // Inicializa o ano de lançamento
    }

    // Método abstrato que deve ser implementado pelas classes filhas
    abstract public function genero(): string;

    // Método para exibir o gênero do filme
    public function mostrarGenero(): void {
        echo "{$this->nome} é do gênero: {$this->genero()}<br>"; // Exibe o gênero do filme
    }

    // Método para exibir o ano de lançamento do filme
    public function mostrarAno(): void {
        echo "{$this->nome} é do ano: {$this->ano}<br><br>"; // Exibe o
