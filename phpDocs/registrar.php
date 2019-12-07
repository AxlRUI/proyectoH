<?php
    include 'conect.php';
    $db = conectarBD();
    if($db ->connect_errno){
        $error = "Conexion no fue exitosa: ".$db->connect_error;
        echo json_encode($error);  
        exit();
    }
    else{
        $cveUP = ;
        $Nombre = $_POST[];
        $Apellidos  = $_POST[];
        $Edad = $_POST[];
        $GrupoSang = $_POST[];
        $SSN = $_POST[];
        $EstadoN = $_POST[];
        $Pass = $_POST[];
        $QueryInsert  = "INSERT INTO Pacientes VALUES ($cveUP,$Nombre,$Apellidos,$Edad,$GrupoSang,$SSN,$EstadoN,$Pass);";
        if($var = $db -> query($QueryInsert)){
            $string  = "Exitoso";
            echo json_encode($string);
        }
    }
?>
