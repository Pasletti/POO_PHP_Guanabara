<?php
    ini_set('display_errors', 1);

    require_once("Pessoa.php");

    class Professor extends Pessoa
    {
        // Atributos
        private $especialidade;
        private $salario;

        // Métodos Especiais
        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function setSalario($salario)
        {
            $this->salario = $salario;
        }

        // Métodos Abstratos
        public function receberAumento($aumento)
        {
            $this->setSalario($this->getSalario() + $aumento);
        }
    }