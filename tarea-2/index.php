<?php
    //incluir la clase
    include "promedio.php";

    //instanciar la clase
    $alumno = new Alumno();

    //asignar valores a las propiedades del objeto
    $alumno ->setNombre(30);
    $persona ->setCal1(30);
    $persona->setCal2(1.80);
    $persona->setCal3(80);

    //impresiones de los resultados
    echo"<br> Edad:" .$persona->edad;
    echo"<br> Altura:" .$persona->altura;
    echo"<br> Peso:" .$persona->peso;
    echo"<br> IMC" .$persona->imc();
?>