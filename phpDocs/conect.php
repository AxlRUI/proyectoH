<?php
    function conectarDB (){
        $database = "u582402068_hackathon"; 
        $username = "u582402068_osiris";
        $password = "123qwe";
        $host = "sql52.main-hosting.eu";
        $db = new mysqli($host,$username,$password,$database);
        return $db;
    }
?> 