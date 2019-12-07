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
    $Pass = $_POST['Pass'];
    $QueryBuscar = "SELECT * FROM Pacientes WHERE curp = $CURP AND Pass = $Pass;";
    if($resultado = $db -> query($QueryBuscar)){
        $rowPacinte = $resultado -> fetch_array(MYSQLI_NUM);
        $_SESSION['Usuario'] = $rowPacinte[9];
        $_SESSION['Pass'] = $rowPaciente[7];
    }
}

?>