<?php
    require_once '../conexaodb.php';

    if(isset($_POST['add-btn'])){
      $erros = array();
      if(!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)){
        $erros [] = "<li>Idade precia ser um número!<li>";
      }
    }
      $erros = array();
      if(!$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL)){
        $erros [] = " <li>Preencha o email correto!<li>";
      }
      if(empty($erros)){
        function clear($input){
            global $connect;
            $var = mysqli_escape_string($connect, $input);
            $var = htmlspecialchars($var);
            return $var;
         }
         $nome = clear($_POST['nome']);
         $sobrenome = clear($_POST['sobrenome']);
         $email = clear($_POST['email']);
         $idade = clear($_POST['idade']);

         $inserir = "INSERT INTO cliente(id, nome, sobrenome, email, idade) 
         VALUES('DEFAULT','$nome', '$sobrenome', '$email', '$idade')";
         if(mysqli_query($connect, $inserir)){
            header("Location: ../index.php");
            exit;
         }
         else{
            header("Location: php-actions/insert.php");
            exit;
         }
        

      }
      else{
        foreach($erros as $erro){
            echo $erro;
        }
      }

?>