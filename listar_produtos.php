<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top:65px;">
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nro produto</th>
      <th scope="col">Nome produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
      <th scope="col">Fornecedor</th>
    </tr>
  </thead>
  <!--codigo para listar produtos do banco de dados-->
    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM `estoque`";
    $busca = mysqli_query($conexao,$sql);

    while ($array = mysqli_fetch_array($busca)){

        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $quantidade = $array['quantidade'];
        $categoria = $array['categoria'];
        $fornecedor = $array['fornecedor'];
        ?>
    <tr>
        <td><?php echo $nroproduto ?></td>
        <td><?php echo $nomeproduto ?></td>
        <td><?php echo $quantidade ?></td>
        <td><?php echo $categoria ?></td>
        <td><?php echo $fornecedor?></td>
    </tr>

    <?php }?> 
</table>
</div><!--container-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>