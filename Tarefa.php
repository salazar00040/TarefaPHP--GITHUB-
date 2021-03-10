<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>HMinha primeira página PHP</title>
  </head>
  <body>
  <table class="table">
  <thead>
  
<?php $nome = 'Paulo cesar' ?>
<?php $sobrenome = 'Meurer'; ?>
<?php $Endereço = 'Avenida Amazonas...'; ?>
<?php $NumeroDaCasa = '2222'; ?>
<?php $Bairro = 'Nova Porto Velho'; ?>
<?php $Cidade = 'Porto velho'; ?>
<?php $Email = 'Paulocesar@hotmail.com'; ?>
<?php $Estado  = 'Rondonia'; ?>
<?php $Telefone  = '(69) 99358-0120'; ?>
<?php $NomeDosPais  = 'Maria'; ?>
<?php $DataDeNascimento = '17/01/1800'; ?>
<?php $DataAtual  = '09/03/2021'; ?>
<?php $EstadoCivil  = 'Namorando'; ?>
<?php $IdadeAtual  = '22'; ?>
<?php $CadastroAtivo  = 'Sim'; ?>





</thead>
  <tbody>
    <tr>
      <th scope="row">Nome</th>
      <td><?php echo $nome; ?> </td>
    
    </tr>
    <tr>
      <th scope="row">Sobrenome</th>
      <td><?php echo $sobrenome;  ?> </td>
    
    </tr>
    <tr>
      <th scope="row">Endereço</th>
      <td> <?php echo $Endereço;  ?> </td>

    </tr>
  
    <tr>
      <th scope="row">Número da Casa</th>
      <td> <?php echo $NumeroDaCasa;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Bairro</th>
      <td> <?php echo $Bairro;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Cidade</th>
      <td> <?php echo $Cidade;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Email</th>
      <td> <?php echo $Email;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Estado</th>
      <td> <?php echo $Estado;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Telefone</th>
      <td> <?php echo $Telefone;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Nome da mãe</th>
      <td> <?php echo $NomeDosPais;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Data de nascimento</th>
      <td> <?php echo $DataDeNascimento;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Data Atual</th>
      <td> <?php echo $DataAtual;  ?> </td>

    </tr>
   

   
    <tr>
      <th scope="row">Estado civil</th>
      <td> <?php echo $EstadoCivil;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Idade atual</th>
      <td> <?php echo $IdadeAtual;  ?> </td>

    </tr>
    <tr>
      <th scope="row">Cadastro ativo?</th>
      <td> <?php echo $CadastroAtivo;  ?> </td>

    </tr>






























  </tbody>
</table>

    
  </body>
</html>