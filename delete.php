<?php

    if(!empty($_GET['idcadastros']))
    {
        include_once('config.php');

        $id = $_GET['idcadastros'];

        $sqlSelect = "SELECT *  FROM cadastros WHERE idcadastros=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastros WHERE idcadastros=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>