<?php
    ini_set('display_errors', 1);

    require_once("Animal.php");

    class Reptil extends Animal
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
            echo("<p>Rastejando</p>");
        }

        // @Override
        public function alimentar()
        {
            echo("<p>Comendo Vegetais</p>");
        }

        // @Override
        public function emitirSom()
        {
            echo("<p>Som de Réptil</p>");
        }
    }