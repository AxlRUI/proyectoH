<?php
    session_start();
    include 'conect.php';
    $db = conectarDB();
    if($db ->connect_errno){
        $error = "Conexion no fue exitosa: ".$db->connect_error;
        echo json_encode($error);  
        exit();
    }else{
        $flag = $_POST['flag'];
        if($flag == "true"){
            $CURP = $_SESSION['Usuario'];
            $pass = $_SESSION['Pass'];
            $QueryBuscar = "SELECT * FROM Paciente WHERE curp = '$CURP' AND Pass = '$Pass'";
            $arrayPrincial = new array();
            if($resultado = $db -> query($QueryBuscar)){
                $rowPaciente = $resultado ->fetch_array(MYSQLI_NUM);
                $arrayPaciente = [
                    "Nombre" => $rowPaciente [1],
                    "Apellidos"  => $rowPaciente[2],
                    "Edad" => $rowPaciente[3],
                    "GrupoSang"  => $rowPaciente[4],
                    "SSN"  => $rowPaciente[5],
                    "EstadoN" => $rowPaciente[6],
                    "Curp" => $rowPaciente[9]
                ];
                array_push($arrayPrincial,$arrayPaciente);
                $QueryCartilla = "SELECT * FROM Cartilla WHERE CveUnicaPaciente ='$rowPaciente[0]'";
                if($resultadoV = $db ->query($QueryCartilla) ){
                    while($rowCartilla = $resultadoV -> fetch_array(MYSQLI_NUM) ){                 
                        if($rowCartilla[2] == 1){
                            $arrayCartilla = [
                                "Paciente" => $rowCartilla[2],
                                "Nombre" => "Sarampion",
                                "Dosis" => $rowCartilla[3],
                                "EdadFrec" => $rowCartilla[4],
                                "Fecha de Aplicacion" => $rowCartilla[5],
                                "Fecha de Vencimiento" => $rowCartilla[6] 
                            ];
                        }
                        if($rowCartilla[2] == 1){
                            $arrayCartilla = [
                                "Paciente" = $rowCartilla[2],
                                "Nombre" = "Tetanos",
                                "Dosis" => $rowCartilla[3],
                                "EdadFrec" => $rowCartilla[4],
                                "Fecha de Aplicacion" => $rowCartilla[5],
                                "Fecha de Vencimiento" => $rowCartilla[6] 
                            ];
                        }
                        array_push($arrayPrincial,$arrayCartilla);
                    }
                    //echo json_encode($arrayPrincial);
                    print_r ($arrayPrincial);
                }
            }    
        }
    }
?>