<?php

    ini_set('display_errors', 1);

    require_once("Mamifero.php");

    class Cachorro extends Mamifero
    {
        // Atributos

        // Métodos Especiais

        // Métodos Abstratos
        // @Override
        public function emitirSom()
        {
            echo("<p>Au! Au! Au!</p>");
        }

        public function enterrarOsso()
        {
            echo("<p>Enterrando Osso</p>");
        }

        public function abanarRabo()
        {
            echo("<p>Abanando o Rabo</p>");
        }
    }