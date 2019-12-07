<?php
    include 'conect.php';
    $db = conectarDB();
    if($db ->connect_errno){
        $error = "Conexion no fue exitosa: ".$db->connect_error;
        echo json_encode($error);  
        exit();
    }
    else{
        $Nombre = $_POST['Nombre'];
        $Apellidos  = $_POST['Apellidos'];
        $Edad = $_POST['Edad'];
        $GrupoSang = $_POST['GS'];
        $SSN = $_POST['SSN'];
        $EstadoN = $_POST['EN'];
        $Pass = $_POST['Pass'];
        $CURP = $_POST['CURP'];
        $Email = $_POST['Email'];
        $QueryInsert  = "INSERT INTO Pacientes VALUES ($cveUP,$Nombre,$Apellidos,$Edad,$GrupoSang,$SSN,$EstadoN,$Pass,$CURP,$Email);";
        if($var = $db -> query($QueryInsert)){
            $string  = "Exitoso";
            echo json_encode($string);
        }
        $db -> close()
    }
?>
