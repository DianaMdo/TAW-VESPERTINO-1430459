<?php
    //incluir la clase
    include "promedio.php";

    //instanciar la clase
    $alumnos = new alumnos(1);
   // $obPro = new alumnos();

    //asignar valores a las propiedades del objeto


    echo"Alumno 1 <br>";
    $persona->setDiana1(60);
    $persona->setDiana2(100);
    $persona->set(60);
    $alumno1 = array ("Unidad 1"=>$persona->calif1, "Unidad 2" =>$persona->calif2, "Unidad3"=>$persona->calif3);
    arsort($alumno1);
    //Impresiones de los resultados
    foreach ($alumno1 as $key => $val){
        echo $key ."=" . $val . "<br>";
    }
    if ($persona->calif1 <= 60 or$persona->calif2 <= 60 or $persona->calif3 <= 60 ){
        echo"Promedio: 60";
    } 
    else{
    echo"Promedio: ".$persona->prom();
    }
    echo"<br><br>";

    $alumnos->setIsra1(60);
    $alumnos->setIsra2(100);
    $alumnos->setIsra3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->isra1;
        echo"<br> Calificacion 2:" .$alumnos->isra2;
        echo"<br> Calificacion 3" .$alumnos->isra3;

    $alumnos->setLuis1(60);
    $alumnos->setLuis2(100);
    $alumnos->setLuis3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->luis1;
        echo"<br> Calificacion 2:" .$alumnos->luis2;
        echo"<br> Calificacion 3" .$alumnos->luis3;

    $alumnos->setCesar1(60);
    $alumnos->setCesar2(100);
    $alumnos->setCesar3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->cesar1;
        echo"<br> Calificacion 2:" .$alumnos->cesar2;
        echo"<br> Calificacion 3" .$alumnos->cesar3;

    $alumnos->serMarcelo1(60);
    $alumnos->serMarcelo2(100);
    $alumnos->serMarcelo3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->marcelo1;
        echo"<br> Calificacion 2:" .$alumnos->marcelo2;
        echo"<br> Calificacion 3" .$alumnos->marcelo3;

    $alumnos->setGrecia1(60);
    $alumnos->setGrecia2(100);
    $alumnos->setGrecia3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->grecia1;
        echo"<br> Calificacion 2:" .$alumnos->grecia2;
        echo"<br> Calificacion 3" .$alumnos->grecia3;

    $alumnos->serJaret1(60);
    $alumnos->serJaret2(100);
    $alumnos->serJaret3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->jaret1;
        echo"<br> Calificacion 2:" .$alumnos->jaret2;
        echo"<br> Calificacion 3" .$alumnos->jaret3;

    $alumnos->setJuan1(60);
    $alumnos->setJuan2(100);
    $alumnos->setJuan3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->juan1;
        echo"<br> Calificacion 2:" .$alumnos->juan2;
        echo"<br> Calificacion 3" .$alumnos->juan3;

    $alumnos->setSandra1(60);
    $alumnos->setSandra2(100);
    $alumnos->setSandra3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->sandra1;
        echo"<br> Calificacion 2:" .$alumnos->sandra2;
        echo"<br> Calificacion 3" .$alumnos->sandra3;

    $alumnos->setSaul1(60);
    $alumnos->setSaul2(100);
    $alumnos->setSaul3(100);

        //impresiones de los resultados
        echo"<br> Calificacion1:" .$alumnos->saul1;
        echo"<br> Calificacion 2:" .$alumnos->saul2;
        echo"<br> Calificacion 3" .$alumnos->saul3;

    

?>



