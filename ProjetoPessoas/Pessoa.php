<?php
    /**
     * Herança -> Permite basear uma nova classe na definição de uma outra classe previamente existente.
     * A herança será aplicada tanto para as características quanto para os comportamentos.
     * 
     * Classe Abstrata -> Não pode ser instanciada. Só pode servir como progenitora.
     * Método Abstrato -> Declarado, mas não impplementado na progenitora.
     * Classe Final -> Não pode ser herdada por outra classe. Obrigatoriamente folha.
     * Método Final -> Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado.
     * 
     * Classe abstract não pode ser instanciada. Ex: $pessoa = new Pessoa()
     */

    ini_set('display_errors', 1);

    abstract class Pessoa
    {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos Especiais
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

        // Métodos Abstratos
        public final function fazerAniversario()
        {
            $this->setIdade($this->getIdade() + 1);
        }
    }