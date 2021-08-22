
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <style>
            body{
                background-color: darkslategray;
                border-style: hidden;
                border-radius: 25px;
                }
            h1{
                text-align: center;
                border-radius: 10px;
                background-color: rgba(211, 231, 211, 0.596);
                border-style: hidden;
                font-size: large;
            }
            p{
                text-align: center;
                border-radius: 10px;
                background-color: rgba(211, 231, 211, 0.596);
                border-style: hidden;
                font-size:medium; 

            }
            a{
                text-align: center;
                color: aliceblue;
                font-size: x-large;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            }
            a:hover{
                
                text-decoration-style:solid;
                font-style: oblique;
                font-size: x-large;
                color: darkslategray;
            }
           
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desk Flora Dash Board</title>
    </head>
    <body>
        <p>
        <a href="individuos.html"> [CADASTRAR NOVO ] </a>
        <a href="dashboard.php">  [ ATUALIZAR PAGINA ] </a><br><br>
        <a href="Login.html"> Sair/Salvar </a>
        <hr>
        </p>
        <?php
        
            
        $con = mysqli_connect('localhost',"root","123456789",'DeskFlora',)
            or die (" Não conectou ");
        
        $result_ind= "SELECT * FROM individuos" ;
        $result_indi= mysqli_query($con, $result_ind);
        $nomeuser = $nome; 
        echo " <BR> LOGADO <BR>".$nomeuser."_";
        
            
            while($row_ind = mysqli_fetch_assoc($result_indi)){
                echo "<h1>ID :".$row_ind['id']."<br> </h1>";
                echo "<p> Nome Popular : ".$row_ind['nomepopular']."<br>";
                echo " Nome Cientifico : ".$row_ind['nomecientifico']."<br>";
                echo " Altura Total  : ".$row_ind['altura']." (mts) <br>";
                echo " Diametro (CAP) : ".$row_ind['diametro']." (cm) </p><hr>";
                             
            }

        ?>
        
    </body>
    </html>