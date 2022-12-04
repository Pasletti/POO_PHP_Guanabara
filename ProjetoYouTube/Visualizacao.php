<?php
    ini_set('display_errors', 0);

    require_once("Video.php");
    require_once("Pessoa.php");

    class Visualizacao
    {
        // Atributos
        private $espectador;
        private $filme;

        // Métodos Especiais
        public function __construct($espectador, $filme)
        {
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
        }

        public function getEspectador()
        {
            return $this->espectador;
        }

        public function setEspectador($espectador)
        {
            $this->espectador = $espectador;
        }

        public function getFilme()
        {
            return $this->filme;
        }

        public function setFilme($filme)
        {
            $this->filme = $filme;
        }

        // Métodos Abstratos
        public function avaliar()
        {
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota)
        {
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorcentagem($porcentagem)
        {
            $nota = 0;

            if ($porcentagem <= 20)
            {
                $nota = 3;
            }
            elseif ($porcentagem <= 50)
            {
                $nota = 5;
            }
            elseif ($porcentagem <= 90)
            {
                $nota = 8;
            }
            else
            {
                $nota = 10;
            }

            $this->filme->setAvaliacao($nota);
        }
    }