<?php
    /**
     * Herança para Diferença -> Vai herdar atributos e métodos com algumas diferenças
     */

    ini_set('display_errors', 1);

    require_once("Pessoa.php");

    // final -> não deixa a classe ser herdada por outra classe como a classe bolsista
    // final class Aluno extends Pessoa
    class Aluno extends Pessoa
    {
        // Atributos
        private $matricula;
        private $curso;

        // Métodos Especiais
        public function getMatricula()
        {
            return $this->matricula;
        }

        public function setMatricula($matricula)
        {
            $this->matricula = $matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function setCurso($curso)
        {
            $this->curso = $curso;
        }

        // Métodos Abstratos
        public function cancelarMatricula()
        {
            echo "<p>Matrícula será cancelada.</p>";
        }

        // final -> não deixa o método ser sobrescrito na classe bolsista
        // public final function pagarMensalidade()
        public function pagarMensalidade()
        {
            echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
        }
    }