<html>
<link rel="stylesheet" href="Sstilo.css">
                </html>
                <?php
                

    
                $nomepopular=$_POST['nomepopular'];
                $nomecientifico=$_POST['nomecientifico'];
                $altura=$_POST['altura'];
                $diametro=$_POST['diametro'];
               
                echo ("<h1>Ok_ .$nomepopular._cadastrado com sucesso ! </h1><br><br>");
                $con = mysqli_connect('localhost',"root","123456789",'DeskFlora',)
                    or die (" Não conectou ");

                $lista = mysqli_query($con,"SELECT * FROM individuos")
                or die ( " invalida consulta");

                    if(!empty($nomepopular))
                {
                    mysqli_query($con, "INSERT INTO individuos (nomepopular, nomecientifico, altura, diametro) 
                    VALUES ('$nomepopular', '$nomecientifico','$altura','$diametro')")
                        or die ("Não inseriu ");
                }

                
                echo "<h1>Registro efetuado.<br>
                 Nome Popular : $nomepopular.<br>Nome Cientifico : $nomecientifico.<br>
                Altura: $altura.<br>
                Diametro (cm) : $diametro.<br></h1>";           
                     echo('<h1><a href="individuos.html"> Cadastrar Proximo </a><br><br> <a href="Login.html"> Sair/Salvar </a></h1>');
                ?>