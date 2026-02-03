<?php

    class Pessoa{
        public $nome;
        public $altura;
        public $peso;
        public $cpf;

        function __construct(string $nome, float $altura, float $peso, string $cpf)
        {
            $this-> nome = $nome;
            $this-> altura = $altura;
            $this-> peso = $peso;
            $this-> cpf = $cpf;
        }

        function andar(){
           echo $this->nome ." ta andando";
        }
    }

    $joao = new Pessoa("João", 1,80, 70, "12345678911");

    $joao ->andar();

      $japa = new Pessoa("japa", 1,80, 70, "12345678911");

    $japa ->andar();