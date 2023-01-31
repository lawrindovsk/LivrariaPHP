<?php
    

    class Cliente{
        //var.
        public string $nome;
        public string $telefone;
        public string $endereco;
        public string $dataNascimento;
        public string $usuario;
        public string $senha;

        public function cliente(string $nome, string $telefone, string $endereco, string $dataNascimento, string $usuario, string $senha)
        {
            $this->nome           = $nome;
            $this->telefone       = $telefone;
            $this->endereco       = $endereco;
            $this->dataNascimento = $dataNascimento;
            $this->usuario        = $usuario;
            $this->senha          = $senha;
        }//Fim da construct Cliente.


        //gets and sets Cliente;
        public function getNome()     : string {return $this->nome;}
        public function setNome()     : void {$this->nome;}
        public function getTelefone() : string {return $this->telefone;}
        public function setTelefone() : void {$this->telefone;}
        public function getEndereco() : string {return $this->endereco;}
        public function setEndreco()  : void {$this-> dataNascimento;}
        public function getUsuario()  : string {return $this-> usuario;}
        public function setUsuario()  : void {$this-> usuario;}
        public function getSenha()    : string {return $this-> senha;}
    }


?>