<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1> BEM VINDO <?= $usuario ?></h1>
    
    <h1>Postar algo</h1>

    <form action="post-insert" method="POST">
        titulo:<input type="text" name="titulo">
        conteúdo:<input type="text" name="corpo">

        <button type="submit">Cadastrar</button>
    </form>

    <?php if(!$posts) {?>
        <?= "Nenhum produto requisitado ! Tu podes requisitar produtos" ?>
    <?php }else{?>
            <?php foreach($posts as $post){ ?>
                <div>
                    <h3><?= $post["titulo"] ?></h3>
                    <p><?=  $post["corpo"] ?></p>
                </div>
            <?php } ?>
         <?php }?>
            
         <a href="/logout">Deslogar</a>

         <script src="./statics/alert.js"></script>

</body>
</html>