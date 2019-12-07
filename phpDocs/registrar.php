<?php
    include 'conect.php';
    $db = conectarDB();
    if($db ->connect_errno){
        $error = "Conexion no fue exitosa: ".$db->connect_error;
        echo json_encode($error);  
        exit();
    }
    else{
        $cveUP = "123QWE";
        $Nombre = $_POST['nombre'];
        $Apellidos  = $_POST['apellidos'];
        $Edad = $_POST['edad'];
        $GrupoSang = $_POST['gs'];
        $SSN = $_POST['ssn'];
        $EstadoN = $_POST['en'];
        $Pass = $_POST['pass'];
        $CURP = $_POST['curp'];
        $Email = $_POST['email'];
        $QueryInsert  = "INSERT INTO Pacientes VALUES ($cveUP,$Nombre,$Apellidos,$Edad,$GrupoSang,$SSN,$EstadoN,$Pass,$CURP,$Email);";
        if($var = $db -> query($QueryInsert)){
            $string  = "Exitoso";
            echo json_encode($string);
        }
        $db -> close()
    }
?>
