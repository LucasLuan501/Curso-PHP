<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar(); 
}

interface Mamifero {
    function mamar(); 
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
}

interface Felino {
    function correr();
}

class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'Au Au';
    }

    function mamar() {
        return 'Irei usar leite!';
    }

    function correr() {
        return "vrunnnnn!";
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';
echo $animal1->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);

