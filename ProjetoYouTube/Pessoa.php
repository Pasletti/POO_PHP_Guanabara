<?php
    ini_set('display_errors', 0);

    abstract class Pessoa
    {
        // Atributos
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;

        // Métodos Especiais
        public function __construct($nome, $idade, $sexo)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }

        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function getExperiencia()
        {
            return $this->experiencia;
        }

        public function setExperiencia($experiencia)
        {
            $this->experiencia = $experiencia;
        }

        // Métodos Abstratos
        protected function ganharExperiencia($experiencia)
        {
            $this->setExperiencia($this->getExperiencia() + $experiencia);
        }
    }