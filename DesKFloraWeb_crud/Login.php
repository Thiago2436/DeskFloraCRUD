<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="Sstilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   
    <form action="" method="post">
        <h3>LOGIN</h3>
        <label for="nome"> NOME </label><br>
        <input type="text" name="nome" id="nome" placeholder="Nome De usuario" required><br>
        <Label for="senha"> SENHA</Label><br>
        <input type="password" name="senha" id="senha" placeholder=" Senha "><br>
        <input type="submit" value="Login">
    </form>
    <?php
        $nome=$_POST['nome'];
        $senha=$_POST['senha'];

            if(!empty($nome)){
            $con = mysqli_connect('localhost',"root","123456789",'DeskFlora',)
            or die (" Não conectou ");

            $nomexiste = mysqli_query($con,"SELECT * FROM usuario  WHERE nome ='$nome'") or die(" indeferida ");
                if(mysqli_fetch_assoc($nomexiste)){
                    $senhaexiste  = mysqli_query($con,"SELECT * FROM usuario WHERE senha='$senha'") 
                    or die("Indeferido");
                    echo(' Nome ok ');
                    if(mysqli_fetch_assoc($senhaexiste)){
                        
                        echo(' Senha ok ');
                        include("individuos.html");
                    }else{
                        echo ('<br> <h1> Senha invalida </h1>');
                    }
                }else{
                    echo ('<br> <h1> Nome invalido </h1>');
                }
            }
    ?>
    <br>
    <footer>
    <a href="index.html"> VOLTAR </a>
    </footer>
</body>
</html>