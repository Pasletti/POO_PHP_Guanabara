<?php

    ini_set('display_errors', 1);

    require_once("Mamifero.php");

    class Lobo extends Mamifero
    {
        // Atributos

        // Métodos Especiais

        // Métodos Abstratos
        public function emitirSom()
        {
            echo("<p>Auuuuuuuuuu!</p>");
        }
    }