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
            $stringJsonPaciente = $rowPaciente[0] + $rowPaciente[1] +$rowPaciente[2]+$rowPaciente[3]+$rowPaciente[4]+$rowPaciente[5]+$rowPaciente[6]+$rowPaciente[7]+$rowPaciente[8]+$rowPaciente[9];
            echo json_encode($stringJsonPaciente);
            $QueryCartilla = "SELECT * FROM Cartilla WHERE CveUnicaPaciente = $rowPaciente[0];";
            if($resultadoV = $db ->query($QueryCartilla) ){
                while($rowCartilla = $resultadoV -> fetch_array(MYSQLI_NUM) ){                 
                    $stringJason ;
                }
            }
        }
    }
?>