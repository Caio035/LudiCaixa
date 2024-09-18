<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LudiCaixa</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
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
        a{
            text-decoration: none;
            background-color: #9d88b0;
            color:white;
            padding: 15px;
            border: 3px solid;
            border-color: #D3e3fc;
            border-radius: 15px;
        }
        a:hover{
            background-color: #D3e3fc;
        }
        .quem_somos{
            display:flexbox;
            font-size: 20px;
            border: none;
            background: none;
            color:#D3e3fc
            
            
        }
    </style>
</head>
<body>
    <header><h1>Seja bem vindo!</h1></header>
    <br></br>
    <div>
            <a href="cadastro.php">Cadastro</a>
            <a href="login.php">Login</a>
            <br></br>
            <p><a class="quem_somos" href="oque_somos.php">Quem somos?</a></p>
    </div>
    

</body>
</html>