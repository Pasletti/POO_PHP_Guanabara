<?php

    class Luta
    {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos Especiais
        private function getDesafiado()
        {
            return $this->desafiado;
        }
        
        private function getDesafiante()
        {
            return $this->desafiante;
        }

        private function getRounds()
        {
            return $this->rounds;
        }

        private function getAprovada()
        {
            return $this->aprovada;
        }
        
        private function setDesafiado($desafiado)
        {
            $this->desafiado = $desafiado;
        }
        
        private function setDesafiante($desafiante)
        {
            $this->desafiante = $desafiante;
        }

        private function setRounds($rounds)
        {
            $this->rounds = $rounds;
        }

        private function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;
        }

        // Métodos Abstratos
        public function marcarLuta($lutador1, $lutador2)
        {
            if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2)
            {
                $this->aprovada = true;
                $this->setDesafiado($lutador1);
                $this->setDesafiante($lutador2);
            }
            else
            {
                $this->aprovado = false;
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar()
        {
            if ($this->aprovada)
            {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);

                switch ($vencedor)
                {
                    case 0: // Empate
                        echo "Empatou!!!<br/><br/>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();

                        break;

                    case 1: // Ganhou Desafiado
                        echo "VENCEU ------> {$this->desafiado->getNome()}<br/><br/>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();

                        break;

                    case 2: // Ganhou Desafiante
                        echo "VENCEU ------> {$this->desafiante->getNome()}<br/><br/>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();

                        break;
                    
                    default:
                        echo "Algo errado aconteceu";
                        break;
                }
            }
            else
            {
                echo "<p>Luta não pode acontecer</p>";
            }
        }
    }