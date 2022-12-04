<?php

    /**
     * Encapsular -> Ocultar partes independentes da implementação, permitindo construir partes invisíveis ao mundo exterior
     * Interface -> Lista de serviços fornecidos por um componente. É o contato com o mundo exterior, que define o que pode
     * ser feito com um objeto dessa classe.
     * 
     * Vantagens em encapsular
     * Tornar mudanças invisíveis
     * Facilitar reutilização do código
     * Reduzir efeitos colaterais
     */

    ini_set('display_errors', 1);

    require_once('Controlador.php');

    class ControleRemoto implements Controlador
    {
        // Atributos
        private $volume;
        private $ligado;
        private $tocando;

        // Métodos Especiais
        public function __construct()
        {
            $this->setVolume(50);
            $this->setLigado(false);
            $this->setTocando(false);
        }

        private function getVolume()
        {
            return $this->volume;
        }

        private function getLigado()
        {
            return $this->ligado;
        }

        private function getTocando()
        {
            return $this->tocando;
        }

        private function setVolume($volume)
        {
            $this->volume = $volume;
        }

        private function setLigado($ligado)
        {
            $this->ligado = $ligado;
        }

        private function setTocando($tocando)
        {
            $this->tocando = $tocando;
        }

        // Métodos Abstratos
        public function ligar()
        {
            $this->setLigado(true);
        }

        public function desligar()
        {
            $this->setLigado(false);
        }

        public function abrirMenu()
        {
            echo "----- MENU -----<br/>";
            echo "Está ligado: " . ($this->getLigado() ? "Sim" : "Não") . "<br/>";
            echo "Está tocando: " . ($this->getTocando() ? "Sim" : "Não") . "<br/>";
            echo "Volume: {$this->getVolume()}";
            for ($i = 1; $i <= $this->getVolume(); $i += 10)
            { 
                echo "|";
            }
            echo "<br/>";
        }

        public function fecharMenu()
        {
            echo "Fechando Menu...<br/>";
        }

        public function maisVolume()
        {
            if ($this->getLigado())
            {
                $this->setVolume($this->getVolume() + 5);
            }
            else
            {
                echo "Impossível aumentar volume<br/>";
            }
        }

        public function menosVolume()
        {
            if ($this->getLigado())
            {
                $this->setVolume($this->getVolume() - 5);
            }
            else
            {
                echo "Impossível diminuir volume<br/>";
            }
        }

        public function ligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() > 0)
            {
                $this->setVolume(0);
            }
        }

        public function desligarMudo()
        {
            if ($this->getLigado() && $this->getVolume() == 0)
            {
                $this->setVolume(50);
            }
        }

        public function play()
        {
            if ($this->getLigado() && !$this->getTocando())
            {
                $this->setTocando(true);
            }
            else
            {
                echo "Não consegui reproduzir<br/>";
            }
        }

        public function pause()
        {
            if ($this->getLigado() && $this->getTocando())
            {
                $this->setTocando(false);
            }
            else
            {
                echo "Não consegui pausar<br/>";
            }
        }
    }
