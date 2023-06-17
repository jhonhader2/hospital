<?php

//Se tiene una clase “personas” (Mario, Margarita y Alejandro), donde el comportamiento de las personas es leer, trabajar, jugar, etc.; pueden estar en estado despierto o dormido; sus propiedades pueden ser color de ojos, género, estado civil, etc.

$mario = new Persona("Azul", "Masculino", "Viudo");
echo $mario->getGenero();
echo "<hr>";
echo $mario->getEstadoCivil();
echo "<hr>";
echo $mario->trabajar();
echo "<hr>";
echo $mario->estado(false);
echo "<hr>";
echo $mario->getColorOjos();

echo "<hr>";
$Margarita = new Persona("Negros", "Femenino", "Soltera");
echo "Los ojos de Margarita son de color: ".$Margarita->getColorOjos();

class Persona
{
    //Propiedades
    private $color_ojos;
    private $genero;
    private $estado_civil;

    public function __construct($color_ojos, $genero, $estado_civil)
    {
        $this->color_ojos = $color_ojos;
        $this->genero = $genero;
        $this->estado_civil = $estado_civil;
    }

    //Getters y Setters
    function getColorOjos()
    {
        return $this->color_ojos;
    }

    function getGenero()
    {
        return $this->genero;
    }

    function getEstadoCivil()
    {
        return $this->estado_civil;
    }

    //Métodos
    function leer()
    {
        return "Está leyendo";
    }

    function trabajar()
    {
        return "Está trabajando";
    }

    function jugar()
    {
        return "Está jugando";
    }

    function estado($dato)
    {
        if ($dato) {
            $estado = "Despierto";
        } else {
            $estado = "Dormido";
        }

        return $estado;
    }
}
























// function media_aritmetica($a, $b)
// {
//     $media = ($a + $b) / 2;

//     return $media;
// }

// echo media_aritmetica(7,9);
// echo "<hr>";
// echo media_aritmetica(300,500);





















//Semántica y Sintáxis con PHP





//Variables
// $nombre_completo = "Jhon Hader Rodriguez Perdomo"; //cadena de caracteres
// $edad = 34; //enteros
// $temperatura = 23.5; //float
// $dato_basicos = [
//     "nombre"    => "Jhon Hader Rodriguez Perdomo",
//     "edad"      => "34",
//     "profesion" => "Instructor SENA",
//]; //arreglo, array

//Funciones 
// print_r($nombre_completo);
// echo "<hr>";

// print_r($edad);
// echo "<hr>";

// print_r($temperatura);
// echo "<hr>";

// print_r($dato_basicos);