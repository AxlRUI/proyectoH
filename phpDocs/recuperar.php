<?php
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
            $rowPaciente = $resultado ->fetch_array(MYSQLI_NUM);
            $stringPacienteJson ;
            $QueryCartilla = "SELECT * FROM Cartilla WHERE CveUnicaPaciente = $rowPaciente[0];";
            if($resultadoV = $db ->query($QueryCartilla) ){
                while($rowCartilla = $resultadoV -> fetch_array(MYSQLI_NUM) ){
                     
                    $stringJason ;
                }
            }
        }
    }
?>