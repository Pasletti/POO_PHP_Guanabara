<?php

    /**
     * Relacionamento entre classes
     */

    ini_set('display_errors', 1);

    class Lutador {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Métodos Especiais
        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
        {
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        public function getNome()
        {
            return $this->nome;
        }

        private function getNacionalidade()
        {
            return $this->nacionalidade;
        }

        private function getIdade()
        {
            return $this->idade;
        }

        private function getAltura()
        {
            return $this->altura;
        }

        private function getPeso()
        {
            return $this->peso;
        }

        public function getCategoria()
        {
            return $this->categoria;
        }

        private function getVitorias()
        {
            return $this->vitorias;
        }

        private function getDerrotas()
        {
            return $this->derrotas;
        }

        private function getEmpates()
        {
            return $this->empates;
        }

        private function setNome($nome)
        {
            $this->nome = $nome;
        }

        private function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;
        }

        private function setIdade($idade)
        {
            $this->idade = $idade;
        }

        private function setAltura($altura)
        {
            $this->altura = $altura;
        }

        private function setPeso($peso)
        {
            $this->peso = $peso;
            $this->setCategoria();
        }

        private function setCategoria()
        {
            if ($this->getPeso() < 52.2)
            {
                $this->categoria = "Inválido";
            }
            elseif ($this->getPeso() <= 70.3)
            {
                $this->categoria = "Leve";
            }
            elseif ($this->getPeso() <= 83.9)
            {
                $this->categoria = "Médio";
            }
            elseif ($this->getPeso() <= 120.2)
            {
                $this->categoria = "Pesado";
            }
            else
            {
                $this->categoria = "Inválido";
            }
        }

        private function setVitorias($vitorias)
        {
            $this->vitorias = $vitorias;
        }

        private function setDerrotas($derrotas)
        {
            $this->derrotas = $derrotas;
        }

        private function setEmpates($empates)
        {
            $this->empates = $empates;
        }

        // Métodos Abstratos
        public function apresentar()
        {
            echo "Lutador: {$this->getNome()}<br/>";
            echo "Origem: {$this->getNacionalidade()}<br/>";
            echo "{$this->getIdade()} anos<br/>";
            echo "{$this->getAltura()} m de altura<br/>";
            echo "Pesando {$this->getPeso()} Kg<br/>";
            echo "Ganhou: {$this->getVitorias()}<br/>";
            echo "Perdeu: {$this->getDerrotas()}<br/>";
            echo "Empatou: {$this->getEmpates()}<br/><br/>";
        }

        public function status()
        {
            echo "{$this->getNome()} ";
            echo "é um peso {$this->getCategoria()}<br/>";
            echo "{$this->getVitorias()} vitórias<br/>";
            echo "{$this->getDerrotas()} derrotas<br/>";
            echo "{$this->getEmpates()} empates<br/><br/>";
        }

        public function ganharLuta()
        {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta()
        {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta()
        {
            $this->setEmpates($this->getEmpates() + 1);
        }
    }