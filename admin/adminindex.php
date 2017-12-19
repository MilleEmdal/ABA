<?php
include '../dbcon.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../main.css">
          <link rel="stylesheet" href="adminstyle">
        <!--<link rel="stylesheet" href="style/medium.css" media="screen and (min-width: 600px)">-->
        <!--<link rel="stylesheet" href="style/large.css" media="screen and (min-width: 960px)">-->
        <title>ABA - K&oslash;benhavn</title>
    </head>
    <body>
     <!-- her starter den store box det hele ligger i -->
             <div class="container">   

                 <img src="../img/aba_banner.jpg" class="cover"> 
<?php include 'menu.php';?>
    <br>
	<!-- her starter indholdet på siden -->       
            <article>
                <br>
                <p>Du er nu logget ind så du kan rette og opdaterer oplysninger.</p>
                <br>
                <div class="forside"><p>Forside</p><a href="updatef.php?sid=<?=$id?>">Ret/opdatere</a></div>
                <br>
                <div class="om"><p>Om os</p><a href="updateoo.php?sid=<?=$id?>">Ret/opdatere</a></div>
                <br>
                <div class="footer"> <p>Footer</p><a href="updatefo.php?id=1">Ret/opdatere</a>
                    <a href="creatfo.php?id=<?=$id?>">Tilf&oslash;j</a></div>
                <br>
                <div class="priser"><p>Priser</p><a href="updatep.php">Ret/opdatere</a></div>
                
    </article>  
       <br>
        
        <div id="overfooter"><?php include '../footer.php'; ?></div>
        
    </div>
        
    </body>
</html>