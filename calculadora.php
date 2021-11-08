<?php
class Calculadora {
    function sumar($numero1,$numero2){
        return $numero1 + $numero2;
    }

    function restar($numero1, $numero2){
        return $numero1 - $numero2;
    }

    function multiplicar($numero1, $numero2){
        return $numero1 * $numero2;
    }

    function dividir($numero1, $numero2){
        if($numero2 == 0){
            throw new Exception("Division por cero");
        }
        return $numero1 / $numero2;
    }

    function generarArreglo(){
        $arreglo = array();
        for($i=0; $i<5; $i++){
            $arreglo[$i] = rand(1,10);
        }
        return $arreglo;
    }

    function capturarEntradasPermutacion(){

    }

    function calcularPermutacion($n, $r){
        $numerador = $this->calcularFactorial($n);
        $denominador = $this->calcularFactorial($n - $r);
        return $numerador/$denominador;
    }

    function calcularFactorial($numero){

    }
}  