<?php
    session_start();
    include 'conect.php';
    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789!@#$%^&*()');
    $db = conectarDB();
    shuffle($seed);
    $rand = '';
    foreach (array_rand($seed, 6) as $k) $rand .= $seed[$k];
    if($db ->connect_errno){
        $error = "Conexion no fue exitosa: ";
        echo json_encode($error);
        exit();
    }
    else{
        $cveUP = $rand;
        $Nombre = $_POST['nombre'];
        $Apellidos  = $_POST['apellidos'];
        $Edad = $_POST['edad'];
        $GrupoSang = $_POST['gs'];
        $SSN = $_POST['ssn'];
        $EstadoN = $_POST['en'];
        $Pass = $_POST['pass'];
        $CURP = $_POST['curp'];
        $Email = $_POST['email'];
        $QueryInsert  = "INSERT INTO Paciente (CveUnicaPaciente, NombrePaciente, Apellidos, Edad, GrupoSanguineo, SSN, EstadoN, Pass, email, curp) VALUES ('$cveUP','$Nombre','$Apellidos',$Edad,'$GrupoSang','$SSN','$EstadoN','$Pass','$Email','$CURP');";
        if($var = $db ->query($QueryInsert)){
            $string  = "Exitoso";
            echo json_encode($string);
            $_SESSION['Usuario'] = $CURP;
            $_SESSION['Pass'] = $Pass;
            
        }
        $db -> close();
    }
?>
