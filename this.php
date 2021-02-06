<?php

//Referência aos metodos e atributos da classe.
//Constantes e metodos estáticos pertencem a própria classe, portanto não são acessiveis ao
//objeto.

class A {
    function exemplo(){
        echo "Sou A<br>";
    }
}

class B extends A {
    function exemplo() {
        echo "Sou B<br>";
    }

    function exemplo2(){
        $this->exemplo(); //Referenciando a função da propria classe.
        parent::exemplo(); //Referenciando a função da classe pai.
        self::exemplo(); //Referenciando a propria classe
    }
}

$obj = new B;
$obj->exemplo2();


//Vai exibir:
/*
Sou B
Sou A
Sou B
*/




?>