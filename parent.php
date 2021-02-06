<?php
//Quando se quer chamar atributo ou metodo da classe pai por meio do "::", mas não quer repetir
//o nome da CLASSE PAI, na qual a mesma esta herdando.
//A::exemple() => parent::example()

Class A{
    function exemplo(){
        echo "Sou A";
    }
}

class B extends A {
    function example(){
         echo "Sou B"."<br>";
         A::example();
         parent::example(); //precisa ser dentro de uma função, pois classe só aceitam metodos e
                            //atributos e não vai entender A::exemplo fora de uma função.
         
    }
    
}

$b = new B;
$b->example();

/*
Vai exibir:
I am B
I am A
I am A
*/


?>