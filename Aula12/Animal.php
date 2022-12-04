<?php

    ini_set('display_errors', 1);

    abstract class Animal
    {
        // Atributos
        protected $peso;
        protected $idade;
        protected $membros;

        // Métodos Especiais
        public function getPeso()
        {
            return $this->peso;
        }

        public function setPeso($peso)
        {
            $this->peso = $peso;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getMembros()
        {
            return $this->membros;
        }

        public function setMembros($membros)
        {
            $this->membros = $membros;
        }

        // Métodos Abstratos
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();
    }