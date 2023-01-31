<?php
    class Livro{
        //var.
        public string $nome;
        public string $editora;
        public string $autor;
        public string $valor;
        
        public function livro(string $nome, string $editora, string $autor, string $valor)
        {
            $this->nome         = $nome;
            $this->editora      = $editora;
            $this->autor        = $autor;
            $this->valor        = $valor;
        }//Fim da função livro.

        //gets and sets Livro;
        public function getNome()     : string {return $this->nome;}
        public function setNome()     : void   {$this->nome;}
        
        public function getEditora()  : string {return $this->editora;}
        public function setEditora()  : void   {$this->editora;}

        public function getAutor()    : string {return $this->autor;}
        public function setAutor()    : void   {$this->autor;}

        public function getValor()    : string {return $this->autor;}
        public function setValor()    : void   {$this->autor;}
    }
?>