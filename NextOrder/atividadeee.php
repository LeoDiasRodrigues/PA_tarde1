<?php

abstract class Produto { // Classe produto
    public $nome; //variavael nome
    public $preco; //variavel preco
    protected $estoque; //variavel estoque

    function __construct($nome, $preco, $estoque){ //Inicializar automaticamente um objeto no momento em que ele é criado
        $this->preco = $preco; 
        $this->estoque = $estoque;
    }

    function baixarEstoque($qtd){ //Quando o cliente compra algum produto, automaticamente ca a quantidade que tem no estoque
        $this->estoque -= $qtd;
    }

    function mostrarEstoque(){ //Simples codigo para mostrar o estoque de produtos npoo geral
        return $this->estoque;
    }
}

class Produtos extends Produto { // Uma nova classe que fez a heranca da classe pedido, para a criaçaõ de produtos para fazer a venda
   
}

abstract class Cliente { // Uma nova classe chamada clientes
    public $nome;

    function __construct($nome){ // Inicializa a função com o nome do cliente
        $this->nome = $nome;
    }

    abstract function desconto(); // Função para criar o desconto dependendo do tipo do cliente
}

class ClienteComum extends Cliente { // Uma nova classe (ClienteComum) que fez a heranca da classe Cliente
    function desconto(){ //Função desconto
        return 0; // Retorna 0% de desconto
    }
}

class ClientePremium extends Cliente { // Uma nova classe (ClientePremium) que fez a heranca da classe Cliente
    function desconto(){ //Função desconto
        return 0.1; // Retorna 10% de desconto
    }
}

class Pedido { // Uma nova classe Pedido
    private $produto; // Nova variavel PRIVADA produto
    private $quantidade; // Nova variavel PRIVADA sobre a quantidade
    private $cliente; // Nova variavel PRIVADA sobre o cliente
    private $status = "aberto"; // Nova variavel PRIVADA sobre o status, que pode ser aberto, pago, enviado ou cancelado

    function __construct(Produto $produto, $quantidade, Cliente $cliente){ //Inicializar automaticamente um objeto no momento em que ele é criado
        $this->produto = $produto; //Coloca valores a propriedades de um objeto dentro de um construtor de uma classe
        $this->quantidade = $quantidade; //Coloca valores a propriedades de um objeto dentro de um construtor de uma classe
        $this->cliente = $cliente; //Coloca valores a propriedades de um objeto dentro de um construtor de uma classe
    }

    function finalizarPedido(){ // Uma funççao para finalizar o pedido
        if ($this->status != "aberto") { // Um codigo, que caso o status estiver diferente de aberto, o pedido não pode ser enviado
            echo "Pedido não pode ser finalizado<br>"; // Mostra a mensagem que o pedido não pode ser realizado
            return;
        }

        $valor = $this->produto->preco * $this->quantidade; //Faz o calculo sobre o valor total, npegando o preço do produto e multiplando pela quantidade
        echo "Preço sem desconto: R$ {$valor}<br>"; // Mostra o valor do produto sem o desconto

        $desconto = $this->cliente->desconto(); // Busque o seu desconto através do desconto() e guarde o resultado em $desconto
        $valorFinal = $valor - ($valor * $desconto); // Calculo para fazer o valor que o cliente vai pagar com o desconto dependendo do seu tipo de cliente

        echo "Preço com desconto: R$ {$valorFinal}<br>"; // Aparece o preço com desconto depois de fazer o calculo

        $this->produto->baixarEstoque($this->quantidade); // O código baixa o estoque de um produto
        $this->status = "pago"; // Marca o status do pedido como pago.

        echo "Status do pedido: {$this->status}<br>"; // Marca o status como pago, depois fazer o pedido
        echo "Estoque restante: {$this->produto->mostrarEstoque()}<br><br>"; // mostra o estoque restante, depois do cliente fazer o pedido
    }
}

$tv = new Produtos("TV", 3500, 10); // Novo produto
$fone = new Produtos("Fone", 150, 15); // Novo produto

$maria = new ClientePremium("Maria"); //Marca que a cliente Maria é uma cliente premium
$joao = new ClienteComum("João"); // Marca que o cliente João é um cliente comum

echo "Pedidos da Maria:<br>"; // Mostra os pedidos da Maria
$pedido1 = new Pedido($tv, 1, $maria); //Novo pedido da Maria
$pedido1->finalizarPedido(); // finaliza o pedido da Maria

$pedido2 = new Pedido($fone, 2, $maria);// Novo pedido da Maria
$pedido2->finalizarPedido();// Finaliza o pedido da maria

$pedido3 = new Pedido($tv, 1, $maria); // Novo pedido da maria
$pedido3->finalizarPedido(); //Finaliza o pedido da Maria

echo "Pedidos do João:<br>"; //Mostra os pedidos dO João
$pedido4 = new Pedido($fone, 1, $joao); //Novo pedido do João
$pedido4->finalizarPedido();//Finaliza o pedido do João

$pedido5 = new Pedido($tv, 2, $joao);//Novo pedido do João
$pedido5->finalizarPedido();//Finaliza o pedido do João

$pedido6 = new Pedido($fone, 3, $joao);//Novo pedido do João
$pedido6->finalizarPedido();//Finaliza o pedido do João

?>