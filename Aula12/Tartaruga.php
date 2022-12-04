<?php

    ini_set('display_errors', 1);

    require_once("Reptil.php");

    class Tartaruga extends Reptil
    {
        // Atributos

        // Métodos Especiais

        // Métodos Abstratos
        // @Override
        public function locomover()
        {
            echo("<p>Andando beeeeem devagar</p>");
        }
    }