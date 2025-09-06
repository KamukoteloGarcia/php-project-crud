<?php
require_once '../conexaodb.php';

if(isset($_POST['btn-eliminar'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "DELETE FROM cliente WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        header("Location: ../index.php"); // volta para lista
        exit;
    } else {
        echo "Erro ao eliminar: " . mysqli_error($connect);
    }
}
?>