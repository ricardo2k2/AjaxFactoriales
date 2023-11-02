<?php
    
    sleep (3);

    function factorial($numerofactorial) {
        if ($numerofactorial < 2) {
            return 1;
        } else {
            return ($numerofactorial*factorial($numerofactorial-1));
        }
    }
        $num = $_POST['numerofactorial'];
        if ($num >=10) {
            echo "prueba con un número menor a 10";
            exit();
        }
        if (!is_numeric($num)) {
            echo "valor no válido, no es número";
            exit();
        }

        $factorial = factorial($num);
        echo "correcto! el factorial es: " . $factorial;
?>