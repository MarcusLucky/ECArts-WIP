<?php
    include("conexeo.php");

    $usu_codigo = intval($_GET['id_usuario'])

    $sql_code = "DELETE FROM usuarios WHERE id_usuario = '$usu_codigo'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if($sql_query)
    echo"
    <script>
        alert('o usuário foi deletado');
        location.href='index.php';
    </script>
    ";
    else
    echo"
    <script>
        alert('não foi possivel deletar o usuario');
        location.href='index.php';
    </script>
    "
?>