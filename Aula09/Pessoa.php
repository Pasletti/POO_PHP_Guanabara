<?php
    ini_set('display_errors', 1);

    class Pessoa
    {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos Especiais
        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        public function getNome()
        {
            return $this->nome;
        }

        private function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        private function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        private function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        // Métodos Abstratos
        public function fazerAniversario()
        {
            $this->setIdade($this.getIdade() + 1);
        }
    }