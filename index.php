<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
#Ejercicio 1
        $base = 5;
        $altura = 10;
        print ($base * $altura / 2) . "\n";

#Ejercicio 2
        $numero = 16;
        if (($numero % 2) == 0) {
            print "Par" . "\n";
        } else {
            print "Impar" . "\n";
        }

#Ejercicio 3
        $primerNumero = 12;
        $segundoNumero = 19;
        if ($primerNumero > $segundoNumero) {
            print $primerNumero . " es mayor que " . $segundoNumero . "\n";
        } elseif ($segundoNumero > $primerNumero) {
            print $segundoNumero . " es mayor que " . $primerNumero . "\n";
        } else {
            print $segundoNumero . " y " . $primerNumero . " son iguales" . "\n";
        }

#Ejercicio 4
#Ejercicio 5
        $contador5 = 1;
        while ($contador5 <= 100) {
            if ($contador5 % 5 == 0) {
                print $contador5 . ", ";
            }
            $contador5++;
        }
        echo "\n";

#Ejercicio6
        $numerosPares = 0;
        $numerosImpares = 0;
        $contador6 = 10;
        while ($contador6 > 0) {
            if ($contador6 % 2 == 0) {
                $numerosPares += $contador6;
            } else {
                $numerosImpares += $contador6;
            }
            $contador6--;
        }
        print "Suma de los numeros pares: " . $numerosPares . "\n";
        print "Suma de los numeros impares: " . $numerosImpares . "\n";
        ?>
    </body>
</html>
