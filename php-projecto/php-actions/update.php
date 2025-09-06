<?php

    require_once '../conexaodb.php';
    if(isset($_POST['editar-btn'])){
        $erros = array();
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
            $erros [] = "<li>Idade precisa ser inteiro!<li>";
        }
         if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $erros [] = "<li>Idade precisa ser inteiro!<li>";
        }
        if(empty($erros)){
            function clear($input){
                 global $connect;
                $var = mysqli_escape_string($connect, $input);
                $var = htmlspecialchars($var);
                return $var;
            }
            $id = clear($_POST['id']);
             $nome = clear($_POST['nome']);
             $sobrenome = clear($_POST['sobrenome']);
             $email = clear($_POST['email']);
             $idade = clear($_POST['idade']);

             $sql = "UPDATE cliente SET
             nome = '$nome',
             sobrenome = '$sobrenome',
             email = '$email',
             idade = '$idade'
             WHERE id = '$id'";
             if(mysqli_query($connect, $sql)){
            header("Location: ../index.php");
            exit;
         }
         else{
            header("Location: php-actions/update.php");
            exit;
         }
        

      }
      else{
        foreach($erros as $erro){
            echo $erro;
        }
      }

        }
        


?>