<?php
    ini_set('display_errors', 1);

    require_once("Pessoa.php");

    class Funcionario extends Pessoa
    {
        // Atributos
        private $setor;
        private $trabalhando;

        // Métodos Especiais
        public function getSetor()
        {
            return $this->setor;
        }

        public function setSetor($setor)
        {
            $this->setor = $setor;
        }

        public function getTrabalhando()
        {
            return $this->trabalhando;
        }

        public function setTrabalhando($trabalhando)
        {
            $this->trabalhando = $trabalhando;
        }

        // Métodos Abstratos
        public function mudarTrabalho()
        {
            $this->setTrabalhando(!$this->getTrabalhando());
        }
    }