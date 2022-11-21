<?php

    include 'conexao.php';

   
    $nroproduto = $_POST['nrmproduto'];
    $nomeproduto = $_POST ['nomeproduto'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST ['categoria'];
    $fornecedor = $_POST ['fornecedor'];

    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `quantidade`, `categoria`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto',$quantidade,'$categoria','$fornecedor')";

    $inserir =  mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container"  style="text-align: center; padding-top:70px;">

    <h3>Formulário Enviado com sucesso!</h3>
    <button type="button" class="btn btn-success">Success</button>
    
</div> <!--div container-->



