<?php

    interface Publicacao
    {
        // Métodos abstratos
        public function abrir();
        public function fechar();
        public function folhear($pagina);
        public function avancarPagina();
        public function voltarPagina();
    }