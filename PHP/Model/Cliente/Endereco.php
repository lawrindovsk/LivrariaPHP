<?php
Class Endereco{
    //var.
        public string $rua;
        public string $numero;
        public string $cidade;
        public string $estado;
        public string $cep;
    
    public function endereco(string $rua, string $numero, string $cidade, string $estado, string $cep)
    {
        $this-> rua      = $rua;
        $this-> numero   = $numero;
        $this-> cidade   = $cidade;
        $this-> estado   = $estado;
        $this-> cep      = $cep;
    }//Fim da função endereco.

    //gets and sets endereco;
    public function getRua() : string {return $this->rua;}
    public function setRua() : void {$this->rua;}

    public function getNumero() : string {return $this->numero;}
    public function setNumero() : void   {$this->numero;}

    public function getCidade() : string {return $this->cidade;}
    public function setCidade() : void   {$this->cidade;}

    public function getEstado() : string {return $this->estado;}
    public function setEstado() : void   {$this->estado;}

    public function getCep()    : string {return $this->cep;}
    public function setCep()    : void   {$this->cep;}



}






?>