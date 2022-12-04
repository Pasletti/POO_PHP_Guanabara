<?php

    ini_set('display_errors', 1);

    /**
     * Construct
     * Getters and Setters
     */

    class Caneta
    {
        private $modelo;
        private $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function __construct($modelo = "", $cor = "", $ponta = 0.0)
        {
            $this->setModelo($modelo);
            $this->setCor($cor);
            $this->setPonta($ponta);
            $this->tampar();
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }

        public function getCor()
        {
            return $this->cor;
        }

        public function setCor($cor)
        {
            $this->cor = $cor;
        }

        public function getPonta()
        {
            return $this->ponta;
        }

        public function setPonta($ponta)
        {
            $this->ponta = $ponta;
        }

        public function getCarga()
        {
            return $this->carga;
        }

        public function setCarga($carga)
        {
            $this->carga = $carga;
        }

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
    