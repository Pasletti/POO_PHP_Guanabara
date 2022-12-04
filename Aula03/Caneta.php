<?php

    ini_set('display_errors', 1);

    /**
     * Modificadores de Visibilidade -> Indicam o nível de acesso aos componentes internos de uma classe.
     * + público - a classe atual e todas as outras classes.
     * - privado - somente a classe atual.
     * # protegido - a classe atual e todas as suas sub-classes.
     */

    class Caneta
    {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar()
        {
            if ($this->tampada == true)
            {
                echo "<p>ERRO! Não posso rabiscar</p>";
            }
            else
            {
                echo "<p>Estou rabiscando...</p>";
            }
        }

        public function tampar()
        {
            $this->tampada = true;
        }

        public function destampar()
        {
            $this->tampada = false;
        }
    }
    