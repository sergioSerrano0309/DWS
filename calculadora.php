<?php
class Calculadora{

    function __construct()
    {

    }

    public function factorial($x)
    {
        if ($x == 0)
        {
            $resultado = 1;
            return $resultado;
        }
        elseif ($x > 0)
        {
            $resultado = 1;
            while($x > 0)
            {
                $resultado = $resultado * $x;
                $x = $x - 1;
            }

            return $resultado;
        } 

    }

    public function coeficienteBinomial($x, $y)
    {
       return $resultado = $this->factorial($x)/($this->factorial($y)*$this->factorial($x - $y));
    }

    public function convierteBinarioDecimal($cadena)
    {
        $posicion = 0;
        $resultado = 0;
        $potencia = strlen($cadena) -1;

        while($potencia >= 0)
        {
            if($cadena[$posicion]==1)
            {
                $resultado = $resultado + (2**$potencia);


            }

            $potencia--;
            $posicion++;

        }

        return $resultado;
    }

    public function sumaNumerosPares($array)
    {
        $resultado = 0;
        $contador = count($array);

        for ($i = 0; $i < $contador; $i++)
        {
            if(($array[$i]%2) == 0)
            {
                $resultado = $resultado + $array[$i];
            }
        }
        return $resultado;
    }

    public function esPalindromo($cadena)
    {
        $esPalindromo = "no es capicua";
        
        if($cadena == strrev($cadena))
        {
            $esPalindromo = "es capicua";
        }

        return $esPalindromo;
    }

    public function sumaMatrices($primera_matriz, $segunda_matriz)
    {   
        $resultado = array();
        for($x = 0; $x >= count($primera_matriz) ; $x++)
        {
            $resultado[] = array();

            for($y = 0; $y >= count($primera_matriz[$x]); $y++){

                $resultado[$x][] = $primera_matriz[$x][$y] + $segunda_matriz[$x][$y];

            }
        }
        return $resultado;
    }
}



