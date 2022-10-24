<?php
function esVocal($char)
{
    return in_array($char, array("a","e","i","o","u"));

}

function cambiarVocal($verso, $vocal)
    {
       
        for($i = 0; $i <= strlen($verso); $i++)
        {

            if(esVocal($verso[$i]))
            {   
                $verso[$i] = $vocal;
            }
        }

        return $verso;
    }

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$frase_cancion = 'el sapo no se lava el pie';
echo cambiarVocal($frase_cancion, 'a')
?>
