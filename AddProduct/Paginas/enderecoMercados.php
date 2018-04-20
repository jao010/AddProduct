<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    //CAPTURAR OS DADOS DO CADASTRO================================================
    $nome = !empty($_GET["primeironome"])? $_GET["primeironome"]: null;
    $sobrenome = !empty($_GET["Sobrenome"])? $_GET["Sobrenome"]: null;
    $email = !empty($_GET["Email"])?$_GET["Email"]: null;
    $senha = !empty($_GET["Senha"])?$_GET["Senha"]:null;
    $confirmasenha = !empty($_GET["ConfirmaSenha"])?$_GET["ConfirmaSenha"]:null;
    $pais = !empty($_GET["Pais"])?$_GET["Pais"]:null;
    $dia = !empty($_GET["dia"])?$_GET["dia"]:"00";
    $mes = !empty($_GET["mes"])?$_GET["mes"]:"00";
    $ano = !empty($_GET["ano"])?$_GET["ano"]:"0000";
    $sexo = !empty($_GET["sexo"])?$_GET["sexo"]:null;
    $cell = !empty($_GET["Numero_cell"])?$_GET["Numero_cell"]:null;
    
    ?>
    <title>AddProduct-Home</title>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap-theme.min.css"/>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css"/>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">        
        $(function(){
            $("#btnMais").click(function(){
                $("#ex").append('<label for="inputCep" class="control-label">CEP</label>');
                $("#ex").append('<input id="inputCep" class="form-control" placeholder="Digite o CEP..." type="number">');
                
                $("#ex").append('<label for="inputEndereco" class="control-label">Endereço do estabelecimento</label>');
                $("#ex").append('<input id="inputEndereco" class="form-control" placeholder="Digite o endereço..." type="text">');
                
                $("#ex").append('<label for="inputNumeroEndereco" class="control-label">Número do estabelecimento</label>');
                $("#ex").append('<input id="inputNumeroEndereco" class="form-control" placeholder="Digite o número..." type="text"/>');
                $("#ex").append('<br>');
                $("#ex").append('<hr>');
            });
            $("[id='inputNumeroEndereco']").css({"width":"10%"});
    });
        
       
    </script>
</head>

<body>
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
            
          <a class="navbar-brand" href="#">Menu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Adicionar Mercado</a></li>
            <li><a href="#about">Adicionar Produto</a></li>
            <li><a href="#contact">Remover Mercado</a></li>
            <li><a href="#contact">Remover Produto</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <br><br><br>
    <h1><center>Registros de endereços do Mercado</center></h1>
    <br>
    
    <form id="formExemplo" data-toggle="validator" role="form">
        
    <hr>
        
        <div id="ex" class="form-group">
            <label for="inputCep" class="control-label">CEP</label>
            <input id="inputCep" class="form-control" placeholder="Digite o CEP..." type="number">
            
            <label for="inputEndereco" class="control-label">Endereço do estabelecimento</label>
            <input id="inputEndereco" class="form-control" placeholder="Digite o endereço..." type="text">
            
            <label for="inputNumeroEndereco" class="control-label">Número do estabelecimento</label>
            <input id="inputNumeroEndereco" class="form-control" placeholder="Digite o número..." type="text"/>
            <br>
            <hr>
        </div>
        <button type="button" id="btnMais" class="btn btn-primary">+</button>
        <br><br>
        
  
        <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br>
</body>
</html>