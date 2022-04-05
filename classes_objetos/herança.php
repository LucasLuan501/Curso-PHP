<div class="titulo">Herança</div>

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

class Usuario Extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchau!!<br>';
        parent::__destruct();
    }

    public function aprensetar(){
        echo "@{$this->login} ";
        parent::aprensetar();
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->aprensetar();
unset($usuario);