<?php
session_start();
include 'conect.php';
$db = conectarDB();
if($db ->connect_errno){
    $error = "Conexion no fue exitosa: ".$db->connect_error;
    echo json_encode($error);  
    exit();
}else{
    $CURP = $_POST['CURP'];
    $Pass = $_POST['PASS'];
    $QueryBuscar = "SELECT * FROM Pacientes WHERE curp = '$CURP' AND Pass = '$Pass';";
    if($resultado = $db -> query($QueryBuscar)){
        $rowPaciente = $resultado -> fetch_array(MYSQLI_NUM);
        $_SESSION['Usuario'] = $rowPacinte[9];
        $_SESSION['Pass'] = $rowPaciente[7];
        header("Location: ../app.php");
    }else{
        $string = "Error";
        echo json_encode($string);
    }
}
?>