<?php
//A diferença do "self::" para o "$this->", é que 
//o self acessa metodos e atibutos estaticos da própria classe


class A {
    function exemplo(){
        echo "Sou A";
    }
}

class B {
    public static $a = 1; //Propriedade estática = pode acessar ela sem precisar instanciar.
    static function exemplo(){           //public pode acessar em qualquer lugar por um obj
        echo "Sou B ". self::$a."<br>";  //private nem mesmo as classes filhas poderão mudar.
    }
}


$obj = new B;
$obj->exemplo();


//Para acessar metodos e atributos estaticos das classes, seu usa
//nome_da_classe::atributo_metodo

B::exemplo(); //Ira exibir "Sou B 1"

/*
resultado:
Sou B 1
Sou B 1
*/

//self e parent só serve para não escrever o nome da classe denovo quando for usar uma outra função
//ou atributo
?>