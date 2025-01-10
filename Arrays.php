<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome_Arrays</title>
</head>

<body>
    <?php
    // nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
    $dato = 1;
    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => "23", "ciudad" => "Barcelona");

    foreach ($persona as $value) {
        echo "dato " . $dato . "º: " . "$value <br>";
        $dato++;
    }



    echo "<br> Ejercicio 2 <br> <br>";




    foreach ($persona as $key => $value) {
        echo "$key: $value <br>";
    }

    echo "<br> Ejercicio 3 <br> <br>";

    $persona["edad"] = "24";

    foreach ($persona as $key => $value) {
        echo "$key: $value <br>";
    }

    echo "<br> Ejercicio 4 <br> <br>";

    array_splice($persona, 3);

    var_dump($persona);

    echo "<br> <br>";
    echo "Ejercicio 5 <br> <br>";

    $letters = "a,b,c,d,e,f";

    $letra = 6;

    $letters2 = explode(separator: ",", string: $letters);

    rsort($letters2); //ordenar en descendente
    
    foreach ($letters2 as $letters) {

        echo "letter " . $letra . "º: " . $letters . "<br>";
        $letra--;
    }
    echo "<br>";
    echo "<br> Ejercicio 6 <br> <br>";

    $people = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);



    arsort($people);
    
    echo "Notas de los estudiantes: ";
    foreach ($people as $x => $x_value) {
        echo $x . ": " . $x_value . " ";

    }
    echo "<br>";
    echo "<br> Ejercicio 7 <br> <br>";
    $divi=0;
    $media=0;
    $suma = 0;
    foreach ($people as $x => $x_value) {
        $suma += $x_value;
        $divi++;
    }
    
    $media = $suma / $divi;
    $roundMedia = round($media,2);
    echo "La media es: ". $roundMedia . "<br>";

    echo "<br>";
    echo "Los alumnos con la nota por encima de la media son: <br>";
    echo "<br>";
        foreach ($people as $nombre => $nota) {
            if($nota > $media){
                echo $nombre. "<br>";
            }
        }
    

    echo "<br> Ejercicio 8 <br> <br>";
    $notaMasAlta = 0;
    foreach ($people as $nombre => $nota) {
        if($nota > $notaMasAlta){
            $notaMasAlta = $nota;
        }

    }
    
    foreach ($people as $nombre => $nota) {
        if($nota == $notaMasAlta){
            echo "La nota mas alta es " . $notaMasAlta ." y el mejor alumno es " . $nombre;     
            }

    }

    ?>
</body>

</html>