<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['senha']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,senha)
        VALUES ('$nome','$email','$senha')");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudiCaixa</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            background-color: #D3e3fc;
            background-image: linear-gradient(60deg, #D3e3fc, #c1a7d7);
            text-align: center
        }
        header{
            display: flexbox;
            background-image: linear-gradient(45deg, #99a4b6,#9d88b0);
            padding: 0.7rem;
            width: 100%;
            color:white;
        }
        div{
            background-color: rgba(87, 194, 132,0.5);
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-radius: 15px;
            color:white;
        }
        input{
            padding:15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: rgb(195, 208, 195);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: rgb(154, 165, 154);
            
        }
        .tem_conta__link{
            text-decoration: none;
            color:rgb(0, 166, 0);
        }
    </style>
</head>
<body>
    <header><h1>Seja bem vindo!</h1></header>
    <br></br>
    <div>
        <form action="testLogin.php" method="POST">
            <h1>Login</h1>
            <input class="inputUser" name="nome" type="text" placeholder="Nome de usuário" required></input>
            <br></br>
            <input class="inputUser" name="senha" type="password" placeholder="Senha" required></input>
            <br></br>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar"></input>
            <p>Não possui uma conta? <strong><a class="tem_conta__link"href="cadastro.php" target="blank">Clique aqui.</a></strong></p>
        </form>
    </div>
    

</body>
</html>