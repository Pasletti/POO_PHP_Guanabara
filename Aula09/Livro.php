<?php
    ini_set('display_errors', 1);

    require_once("Publicacao.php");

    class Livro implements Publicacao
    {
        // Atributos
        private $titulo;
        private $autor;
        private $totalPaginas;
        private $paginaAtual;
        private $aberto;
        private $leitor;

        // Métodos Especiais
        public function __construct($titulo, $autor, $totalPaginas, $leitor)
        {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotalPaginas($totalPaginas);
            $this->setAberto(false);
            $this->setPaginaAtual(0);
            $this->setLeitor($leitor);
        }

        private function getTitulo()
        {
            return $this->titulo;
        }

        private function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }

        private function setAutor($autor)
        {
            $this->autor = $autor;
        }

        private function getTotalPaginas()
        {
            return $this->totalPaginas;
        }

        private function setTotalPaginas($totalPaginas)
        {
            $this->totalPaginas = $totalPaginas;
        }

        private function getPaginaAtual()
        {
            return $this->paginaAtual;
        }

        private function setPaginaAtual($paginaAtual)
        {
            $this->paginaAtual = $paginaAtual;
        }

        private function getAberto()
        {
            return $this->aberto;
        }

        private function setAberto($aberto)
        {
            $this->aberto = $aberto;
        }

        private function getLeitor()
        {
            return $this->leitor;
        }

        private function setLeitor($leitor)
        {
            $this->leitor = $leitor;
        }

        // Métodos Abstratos
        public function detalhes()
        {
            return "
                Livro { 
                    <br/>titulo = {$this->getTitulo()} 
                    <br/>autor = {$this->getAutor()} 
                    <br/>total de páginas = {$this->getTotalPaginas()} 
                    <br/>página atual = {$this->getPaginaAtual()} 
                    <br/>aberto = {$this->getAberto()} 
                    <br/>leitor = {$this->getLeitor()->getNome()} 
                    <br/>idade = {$this->getLeitor()->getIdade()} 
                    <br/>sexo = {$this->getLeitor()->getSexo()}
                }";
        }

        public function abrir()
        {
            $this->setAberto(true);
        }

        public function fechar()
        {
            $this->setAberto(false);
        }

        public function folhear($pagina)
        {
            if ($pagina > $this->getTotalPaginas())
            {
                $this->setPaginaAtual(0);
            }
            else
            {
                $this->setPaginaAtual($pagina);
            }
        }

        public function avancarPagina()
        {
            $this->setPaginaAtual($this->getPaginaAtual() + 1);
        }

        public function voltarPagina()
        {
            $this->setPaginaAtual($this->getPaginaAtual() -1);
        }
    }