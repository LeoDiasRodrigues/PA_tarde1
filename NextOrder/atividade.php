<?php

class Produto {
    public $nome;
    public $preco;
    private $estoque;

    function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    function vender($qtd) {
        $this->estoque -= $qtd;
    }
}




abstract class Cliente {
    public $nome;

         function __construct($nome) {
               $this->nome = $nome;
        }

        abstract function desconto();
}



class ClienteComum extends Cliente {
        function desconto() {
            return 0.01;
    }
}



class ClientePremium extends Cliente {
        function desconto() {
            return 0.15;
    }
}



class Pedido {
    public $cliente;
    public $produtos;
    public $status = "aberto";

    function __construct($cliente) {
        $this->cliente = $cliente;
    }

    function adicionarProduto($produto, $qtd) {
        $this->produtos[] = [$produto, $qtd];
        $produto->vender($qtd);
    }

    function final() {
        $total = 0;

        foreach ($this->produtos as $item) {
            $total += $item[0]->preco * $item[1];
        }

        $total -= $total * $this->cliente->desconto();
        $this->status = "pago";

        echo "Cliente: {$this->cliente->nome}<br>";
        echo "Total: {$total} R$<br>";
        echo "status do pedido: {$this->status}<br><br>";
    }
}



$tv = new produto("TV", 1500, 5);
$fone = new produto("Fone", 120, 10);
$celular = new produto("Celular", 1300, 3);
$teclado = new produto("Teclado", 299, 8);

$joao = new ClienteComum("João");
$maria = new ClientePremium("Maria");

$pedido1 = new Pedido($joao);
$pedido1->adicionarProduto($tv, 1);
$pedido1->final();

$pedido2 = new Pedido($maria);
$pedido2->adicionarProduto($tv, 3);
$pedido2->adicionarProduto($fone, 2);
$pedido2->final();

?>
