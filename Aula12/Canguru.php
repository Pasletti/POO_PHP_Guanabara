<?php

    ini_set('display_errors', 1);

    require_once("Mamifero.php");

    class Canguru extends Mamifero
    {
        // Atributos

        // Métodos Especiais

        // Métodos Abstratos
        // @Override
        public function locomover()
        {
            echo("<p>Saltando</p>");
        }

        public function usarBolsa()
        {
            echo("<p>Usando bolsa</p>");
        }
    }