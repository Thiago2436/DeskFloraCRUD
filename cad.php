<html>
<link rel="stylesheet" href="Sstilo.css">
                </html>

                <?php
    
                $nome=$_POST['nome'];
                $email=$_POST['email'];
                $telefone=$_POST['telefone'];
                $senha=$_POST['senha'];
                
                echo ("<h1>OK_.$nome._Bem vindo cadastrado com sucesso !</h1><br><br>");
                
                if(!empty($nome))
                {
                    $con = mysqli_connect('localhost',"root","123456789",'DeskFlora',)
                    or die (" Não conectou ");

                    $existe = mysqli_query($con,"SELECT * FROM usuario  WHERE nome ='$nome'")
                     or die (" consulta indeferida");
                     
                     if(mysqli_fetch_assoc($existe)){
                         echo('<h1>NOME JA CADASTRADO ! FAÇA SEU LOGIN </h1>');
                            }
                            else{
                          mysqli_query($con, "INSERT INTO usuario (nome, email, telefone, senha) VALUES ('$nome', '$email','$telefone','$senha')")
                        or die ("Não inseriu ");}

                }

                echo('<br><h1><a href="index.html"> Voltar </a><br><br> <a href="Login.php"> Login </a></h1>');
                ?>