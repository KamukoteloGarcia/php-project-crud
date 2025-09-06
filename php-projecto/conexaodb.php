<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema1";

        $connect = mysqli_connect($servername, $username, $password, $database);

        if(mysqli_connect_error()){
            echo "Erro na conexão ".mysqli_connect_error();
        }

?>