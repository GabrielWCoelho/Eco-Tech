<?php
      if(isset($_POST['submit']))
        {   
            
        include_once('config.php');

        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $mensagem = $_POST ['mensagem'];
      
         $result = mysqli_query($conexão,"INSERT INTO usuarios (nome,email,mensagem) VALUES ($nome,$email,$mensagem)");
    }
       
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Eco-Tech é uma empresa com compromisso com o meio
    ambiente e interesse na busca de construir valor para a
    sociedade, Com uma proposta real de reduzir o impacto
    ambiental, Contaminações e impactos sociais.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Eco Tech</title>
</head>
<body>
    <header>
        
        <div class="center">
            <div class="logo"><img src="assets/Eco T300.png"></div>
                <div class="menu">
                    <a href="index.php">HOME</a>
                    <a href="about.php">SOBRE NÓS</a>
                    <a href="why.php">POR QUE RECICLAR?</a>
                    <a href="as.php">COMO RECICLAR?</a>
                    <a href="contato.php">CONTATE-NOS</a>
                </div><!--menu-->
                <div class="phone"><strong><p style="color:rgb(113, 248, 86);"> FALE CONOSCO</strong><br><p style="color:azure;">(51) 9934-2112</div>
        
        </div>
    </header>
    <div class="tituloform"><h2>Contate-nos</h2></div>
    <form action="form.php" method="$_POST">
    <div class="col-md-4 mb-3" id="camponome">
      <label for="validationTooltip01" class="nomeform">Nome</label>
      <input type="text" class="form-control" name="nome" id="validationTooltip01" placeholder="Nome" required>
      <div class="valid-feedback">
        Tudo certo!
      </div>
  <div class="emailform">
    <label for="exampleFormControlInput1" class="emailform">Endereço de email</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
  </div>
  <form class="message">
  <div class="mb-3">
    <label for="validationTextarea" class="messageform">Mensagem</label>
    <textarea class="form-control" id="validationTextarea" name="mensagem" required placeholder="Escreva sua mensagem" ></textarea>
    
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</body>
</html>