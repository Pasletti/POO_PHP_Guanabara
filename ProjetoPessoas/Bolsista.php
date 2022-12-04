<?php
    /**
     * Herança de Diferença -> Vai herdar atributos e métodos com algumas diferenças
     */

    require_once("Aluno.php");

    class Bolsista extends Aluno
    {
        // Atributos
        private $bolsa;

        // Métodos Especiais
        public function getBolsa()
        {
            return $this->bolsa;
        }

        public function setBolsa($bolsa)
        {
            $this->bolsa = $bolsa;
        }
        
        // Método Abstrato
        public function renovarBolsa()
        {
            echo "<p>Bolsa renovada.</p>";
        }

        // override o método pagarMensalidade da Classe Aluno
        public function pagarMensalidade()
        {
            echo "<p>{$this->getNome()} é bolsista. Então paga com desconto!</p>";
        }
    }