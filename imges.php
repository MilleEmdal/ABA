<?php
//include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="main.css">
        <title>ABA - K&oslash;benhavn</title>
    </head>
    <body>
     <!-- her starter den store box det hele ligger i -->
             <div class="container">   

<?php include 'menu.php';?>
    <br>
	<!-- her starter indholdet på siden -->       
            <article>
                <br>
                <h1>Billedegalleri</h1>
                <br>
                <p>Her kan du se billeder vi tager fra vores hverdag med små historier tilh&oslash;rende.</p>
                <img src="img/img3.JPG" class="img">
                <img src="img/img4.JPG" class="img">
                <img src="img/img5.JPG" class="img">
                <img src="img/img6.JPG" class="img">
                <img src="img/img8.JPG" class="img">
                
                <br>
                <p>Billeder kommer snarest</p>    
    </article>
        <!-- her slutter indholdet -->
        <br>
        <!-- Footer starter -->
        <div id="overfooter">
            <?php include 'ofooter.php'; ?>
            <br>
        </div>
        
        <?php include 'footer.php'; ?>
    </div>
        <!-- Footer slutter -->
    </body>
</html>