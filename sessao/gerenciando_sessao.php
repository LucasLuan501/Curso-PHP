<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('b24e9854f457a682a5b6b83f8c7357bd');
session_start();
echo session_id();

$contador = &$_SESSION['contaodor'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}