<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS only  Boots4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
</head>
<body>
    <style>
       *{
       
        margin: 0;
        padding: 0;
        }

        body{
          background: rgb(80,72,241);
          background: linear-gradient(90deg, rgba(80,72,241,1) 0%, rgba(113,233,255,1) 37%, rgba(0,129,255,1) 100%);
          
          
        }
  
        .container{
            width: 500px;
            padding:15px;
            box-shadow: 2px 1px 3px 3px rgba(0, 0, 0, 0.2);
            
           
        }

      
        .w50{
          float: left;
          width: 50%;
          padding-top: 24px;
         
        }

        .clear{
          clear: both;
        }

      

        .container label{
            font-size: 18px;
            
            text-transform:capitalize;
        }

        h3{
            margin-bottom: 30px;
        }

        @media (max-width: 700px){
          .time{
            display: none;
          }
        } 
    
        </style>


 <section class="w50">

 <form action="recebe_dados.php" method="POST">
    <div class="container">

    <h3>Formulário de Cadastro</h3>
    <div class="form-group">
    <label for="exampleInputEmail1">Nrm do Produto</label>
    <input type="number" class="form-control"  name="nrmproduto"  min="0"    placeholder="Insira o Nrm do Produto" >
    </div>

     <div class="form-group">
    <label for="exampleInputEmail1">Nome do Produto</label>
    <input type="name" class="form-control" name="nomeproduto"  placeholder="Insira o Nome do Produto" >
     </div>

   <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control"  name="categoria" >
      <option>Software</option>
      <option>Hardware</option>
      <option>App</option>
      <option>Wordpress</option>
      <option>PHP</option>
    </select>
  </div>

  <form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Insira a quantidade de Produto</label>
  <select class="custom-select my-1 mr-sm-2" name="quantidade">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="3">4</option>
    <option value="3">5</option>
    <option value="3">6</option>
  </select>
    
  <div class="form-group">
    <label for="exampleFormControlSelect1">Fornecedor</label>
    <select class="form-control"  name="fornecedor">
      <option>Correios</option>
      <option>Total Express</option>
      <option>ASAP</option>
      <option>JadLog</option>
      <option>Braspress</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success" >Enviar</button>

</div><!--container--> 
</form>

</section>


<section  class="w50 time">
  <img src="./img/time.png">
  
</section>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>