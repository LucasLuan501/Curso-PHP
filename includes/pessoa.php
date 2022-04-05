<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'Pessoa diz: Tchau!!';
    }

    public function aprensetar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}