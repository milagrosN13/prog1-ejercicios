<?php
class Triangulo
{
    //La clase tiene 3 propiedades, que son la medida de los tres ángulos.
    public $a1;
    public $a2;
    public $a3;
    
    //Método constructor, invocado con la palabra new.
    //Recibe tres números y asigna cada uno de ellos a las 3 propiedades
    //de la clase (que son la medida de los 3 ángulos).
    public function __construct($uno, $dos, $tres)
    {
        $this->a1 = $uno;
        $this->a2 = $dos;
        $this->a3 = $tres;        
    }
    
    public function esTriangulo() 
    {
       return $this-> a1 + $this-> a2 + $this-> a3 >= 180;
       
       
        
        
        //Construyan ustedes este método.
        //(Si los ángulos suman 180º es triángulo, y si no, no lo es.)
        //Este método debe retornar true o false.
    }
    
    public function tipoSegunLados() 
    {
        if (($this->a1) == ($this->a2) &&  ($this->a2) == ($this->a3)){
            return "equilatero";
        }elseif($this-> a1 == $this-> a2 || $this-> a1 == $this-> a3 || $this-> a2 == $this-> a3){
            return "isoseles";
        } else{
            return "escaleno";
        }

        //Construyan ustedes este método.
        //Si los tres ángulos son iguales, también serán iguales los tres lados,
        //por lo tanto es equilátero.
        //Si dos ángulos son iguales y el otro distinto, es isósceles.
        //Si los tres ángulos son distintos, es escaleno.
        //Esta función debe retornar una cadena (string). Por ejemplo: "escaleno"

    }

    public function tipoSegunAngulos()
    {
        
        if ($this->a1 < 90 || $this->a2 < 90 || $this->a3 < 90){
            return "obtusanglo";
        }elseif($this->a1 > 90 || $this->a2 > 90 || $this->a3 > 90){
            return "acutangulo";
        }else{
            return "rectangulo";
        }
        
        //Construyan ustedes este método para el ejercicio 2.
        //Si tiene un ángulo mayor a 90º es obtusángulo.
        //Si tiene un ángulo de 90º, es rectángulo.
        //Si los tres ángulos son menores de 90º es acutángulo.
        //La función debe retornar una cadena.
                
    }
}

