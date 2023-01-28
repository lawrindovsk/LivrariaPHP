<?php
    //require_once("");

    class Cliente{

        public string $nome;
        public string $telefone;
        public string $endereco;
        public string $dataNascimento;
        //var.

        public function __construct(string $nome, string $telefone, string $endereco, string $dataNascimento)
        {
            $this->nome           = $nome;
            $this->telefone       = $telefone;
            $this->endereco       = $endereco;
            $this->dataNascimento = $dataNascimento;
        }//Fim da construct Cliente.

        //gets and sets;
    
        public function getNome() : string {return $this->nome;}
        public function setNome() : void {$this->nome;}

        public function getTelefone() : string {return $this->telefone;}
        public function setTelefone() : void {$this->telefone;}
    }

?>