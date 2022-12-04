<?php

    ini_set('display_errors', 1);

    require_once("Animal.php");

    class Ave extends Animal
    {
        // Atributos
        private $corPena;

        // Métodos Especiais
        public function getCorPena()
        {
            return $this->corPena;
        }

        public function setCorPena($corPena)
        {
            $this->corPena = $corPena;
        }

        // Métodos Abstratos
        // @Override
        public function locomover()
        {
            echo("<p>Voando</p>");
        }

        // @Override
        public function alimentar()
        {
            echo("<p>Comendo Frutas</p>");
        }

        // @Override
        public function emitirSom()
        {
            echo("<p>Som de Ave</p>");
        }

        public function fazerNinho()
        {
            echo("<p>Construindo um ninho</p>");
        }
    }