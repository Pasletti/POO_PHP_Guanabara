<?php
    /**
     * Polimorfismo de Sobrecarga -> PHP NÃO SUPORTE ESTE MÉTODO
     * Uma forma de resolver é criar métodos com nomes diferentes, pois não tem implementação para o PHP
     * Assinaturas Diferentes
     * Mesma Classe
     * 
     * Assinaturas -> Quantidade e tipos de parâmetros.
     */

    ini_set('display_errors', 1);

    require_once("Animal.php");

    class Mamifero extends Animal
    {
        // Atributos
        protected $corPelo;

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
        public function emitirSom()
        {
            echo("<p>Som de Mamífero</p>");
        }
    }