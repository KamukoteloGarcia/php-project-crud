<?php 
    include "db.php";
    require_once 'conexaodb.php';
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query($connect, $sql);
     $dados = mysqli_fetch_all($resultado);

     // consulta
    // consulta
    /*$stmt = $conn->prepare($sql);
    $stmt->execute();

    // verificar registros
    $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);*/

    function IsAdult($idade){
        if ($idade>17)return 'Sim';
        //ndvshvdjhsvjh
        return 'Não';
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto Dev</title>
    <link rel="stylesheet" href="assets/CSS/styles.css">
</head>
<body>
   <div class="row">
    <div class="col s12 m6 push-m3 tabela-container">
        <h1>Clientes</h1>
        <table class="tabela-clientes">
            <thead>
                <?php
                ?>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Adulto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                if(count($dados) > 0){
                        $i=0;
                        while($i<count($dados)){
                        echo "<tr>";
                        echo "<td>".htmlentities($dados[$i][0])."</td>";
                        echo "<td>".htmlentities($dados[$i][1])."</td>";
                        echo "<td>".htmlentities($dados[$i][2]) ."</td>";
                        echo "<td>".htmlentities($dados[$i][3]) ."</td>";
                        echo "<td>".htmlentities($dados[$i][4]) ."</td>";
                        echo "<td>".IsAdult($dados[$i][4])."</td>";
                        echo '<td class="acoes">
                                    <a href="editar.php?id=' . $dados[$i][0] . '" class="btn editar">Editar</a>
                                    <a href="eliminar.php?id=' . $dados[$i][0] . '" class="btn eliminar">Eliminar</a>
                                </td>';
                        echo "</tr>";
                        $i++;
                    }
                }
                        ?>
              
            </tbody>
        </table>
    </div>
</div>
<!-- Botão fora da tabela -->
        <div class="botao-adicionar">
            <a href="adicionar.php" class="btn adicionar">Adicionar Cliente</a>
        </div>
       
    
</body>
</html>