<?php

    ini_set('display_errors', 1);

    /**
     * Construct
     * Getters and Setters
     */

    class ContaBanco
    {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function getNumConta()
        {
            return $this->numConta;
        }

        public function setNumConta($numConta)
        {
            $this->numConta = $numConta;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function getDono()
        {
            return $this->dono;
        }

        public function setDono($dono)
        {
            $this->dono = $dono;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }

        public function abrirConta($tipo)
        {
            $this->setTipo($tipo);
            $this->setStatus(true);
            if ($tipo == "CC") 
            {
                $this->setSaldo(50);
            }
            elseif ($tipo == "CP") 
            {
                $this->setSaldo(150);
            }
        }

        public function fecharConta()
        {
            if ($this->getSaldo() > 0) 
            {
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }
            elseif ($this->getSaldo() < 0) 
            {
                echo "<p>Conta está em débito. Impossível encerrar!</p>";
            }
            else 
            {
                $this->setStatus(false);
                echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
            }
        }

        public function depositar($valor)
        {
            if ($this->getStatus()) 
            {
                $this->setSaldo($this->getSaldo() + $valor);
                echo "<p>Depósito de R$ $valor na conta de {$this->getDono()}</p>";
            }
            else 
            {
                echo "<p>Conta fechada. Não consigo depositar</p>";
            }
        }

        public function sacar($valor)
        {
            if ($this->getStatus()) 
            {
                if ($this->getSaldo() >= $valor) 
                {
                    $this->setSaldo($this->getSaldo() - $valor);
                    echo "<p>Saque de R$ $valor autorizado na conta de {$this->getDono()}</p>";
                }
                else 
                {
                    echo "<p>Saldo insuficiente para saque.</p>";
                }
            }
            else 
            {
                echo "<p>Não posso sacar de uma conta fechada</p>";
            }
        }

        public function pagarMensal()
        {
            if ($this->getTipo() == "CC") 
            {
                $valor = 12;
            }
            elseif ($this->getTipo() == "CP") 
            {
                $valor = 20;
            }
            if ($this->getStatus()) 
            {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$ $valor debitada na conta de {$this->getDono()}</p>";
            }
            else 
            {
                echo "<p>Problemas com a conta. Não posso cobrar.</p>";
            }
        }
    }
    