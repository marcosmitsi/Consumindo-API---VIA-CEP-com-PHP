<?php
include_once('assets/functions/viacep.php');
$address = getAdress();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <!--Carregado local-->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!--Carregado de servidor externo via CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>API VIAWEB</title>
</head>

<body>
  <div class="container">
    <div class="row" id="topo">
      <div class="col-12">
        <article> </article>
      </div>
      <div class="col-12" id="medio">
        <img src="assets/img/logo.svg" class="logo">
      </div>
      <div class="col-12" id="down">
        <form action="" method="post">

          <div class="mb-3 col-sm-5">
            <label for="buscaCep" class="form-label">
              <h1 class="mb-3">Busca Cep</h1>
            </label>
            <input type="text" class="form-control" id="buscaCep" name="cep" placeholder="Digite o Cep para encontrar o endereço" aria-describedby="buscaCepHelp" value="<?php echo $address->cep ?>">
            <div id="buscaCepHelp" class="form-text">digite apenas números.</div>
          </div>
          <input type="submit" class="btn btn-outline-success" value="Buscar">
      </div>

      <div class="col-6">
        <label for="inputRua" class="form-label"></label>
        <input type="text" class="form-control" id="inputRua" placeholder="Rua:" value="<?php echo $address->logradouro ?>">
      </div>
      <div class="col-6">
        <label for="inputBairro" class="form-label"></label>
        <input type="text" class="form-control" id="inputBairro" placeholder="Bairro:" value="<?php echo $address->bairro ?>">
      </div>
      <div class="col-6">
        <label for="inputCidade" class="form-label"></label>
        <input type="text" class="form-control" id="inputCidade" placeholder="Cidade" value="<?php echo $address->localidade ?>">
      </div>
      <div class="col-6">
        <label for="inputEstado" class="form-label"></label>
        <input type="text" class="form-control" id="inputEstado" placeholder="Estado:" value="<?php echo $address->uf ?>">
      </div>



      </form>

    </div>
  </div>
  </div>
  <!-- Opção 1: Bootstrap Bundle com Popper -->
  <!--Carregado local-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--Carregado de servidor externo via CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Opção 2: Separado Popper e Bootstrap JS -->
  <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
  <!-- Formatando o input ao digitar "mascára do CEP"
  <script src="assets/js/cleave.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js" integrity="sha512-KaIyHb30iXTXfGyI9cyKFUIRSSuekJt6/vqXtyQKhQP6ozZEGY8nOtRS6fExqE4+RbYHus2yGyYg1BrqxzV6YA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    new Cleave ('#buscaCep',
    {
      blocks:[5,3],
      delimiters:['-'],
      numericOnly:true
    })
  </script>
  -->
</body>

</html>