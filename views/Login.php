<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Logue no sistema</h1>

    <form action="login-user" method="POST">
        Email:<input type="text" name="email">
        Senha:<input type="text" name="password">

        <button type="submit">Logar</button>
    </form>
    
    <?php if($loginFail){ ?>
        <p style="color:red">Algo de errado não deu certo no seu login</p>
    <?php } ?>
</body>
</html>