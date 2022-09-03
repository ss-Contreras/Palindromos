<?php

$palabra = readline("Digite una palabra palindroma: ");

if (strrev($palabra) == $palabra)
{
    echo "la palabra $palabra al revez es " . strrev($palabra);
}
else {
    echo "La palabra $palabra al revez es " . strrev($palabra) . " NO es palindroma"; 
}


?>