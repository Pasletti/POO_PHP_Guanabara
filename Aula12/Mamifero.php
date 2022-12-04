<?php
    /**
     * Polimorfismo de Sobreposição -> Acontece quando substituímos um método de uma superclasse na sua subclasse, usando a mesma assinatura.
     * Mesma Assinatura
     * Classes Diferentes
     */

    ini_set('display_errors', 1);

    require_once("Animal.php");

    class Mamifero extends Animal
    {
        // Atributos
        private $corPelo;

        // Métodos Especiais
        public function getCorPelo()
        {
            return $this->corPelo;
        }

        public function setCorPelo($corPelo)
        {
            $this->corPelo = $corPelo;
        }

        // Métodos Abstratos
        // @Override
        public function locomover()
        {
            echo("<p>Correndo</p>");
        }

        // @Override
        public function alimentar()
        {
            echo("<p>Mamando</p>");
        }

        // @Override
        public function emitirSom()
        {
            echo("<p>Som de Mamífero</p>");
        }
    }