<?php
    /*
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
            $rowPaciente = $resultado ->fetch_array($resultado);
            $QueryCartilla = "SELECT * FROM Vacunas WHERE CveUnicaPaciente = $rowPaciente[0];";
            $resultado
            while($rowCartilla = )
        }
    }*/
?>