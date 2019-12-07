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
<<<<<<< Updated upstream
    $Pass = $_POST['PASS'];
    $QueryBuscar = "SELECT * FROM Pacientes WHERE curp = '$CURP' AND Pass = '$Pass';";
=======
    $Pass = $_POST['Pass'];
    $QueryBuscar = "SELECT * FROM Paciente WHERE curp = '$CURP' AND Pass = '$Pass';";
>>>>>>> Stashed changes
    if($resultado = $db -> query($QueryBuscar)){
        $rowPaciente = $resultado -> fetch_array(MYSQLI_NUM);
        $_SESSION['Usuario'] = $rowPacinte[9];
        $_SESSION['Pass'] = $rowPaciente[7];
        header("Location: ../app.php");
<<<<<<< Updated upstream
    }else{
        $string = "Error";
        echo json_encode($string);
=======


    }else{
        echo "no encontrado";
>>>>>>> Stashed changes
    }
}
?>
