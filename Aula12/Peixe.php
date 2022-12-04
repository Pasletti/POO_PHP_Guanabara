<?php

    ini_set('display_errors', 1);

    require_once("Animal.php");

    class Peixe extends Animal
    {
        // Atributos
        private $corEscama;

        // Métodos Especiais
        public function getCorEscama()
        {
            return $this->corEscama;
        }

        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
        }

        // Métodos Abstratos
        // @Override
        public function locomover()
        {
            echo("<p>Nadando</p>");
        }
    
        // @Override
        public function alimentar()
        {
            echo("<p>Comendo Substâncias</p>");
        }

        // @Override
        public function emitirSom()
        {
            echo("<p>Peixe não faz som</p>");
        }

        public function soltarBolha()
        {
            echo("<p>Soltou uma bolha</p>");
        }
    }