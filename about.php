<?php
include 'dbcon.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="main.css">
        <!--<link rel="stylesheet" href="style/medium.css" media="screen and (min-width: 600px)">-->
        <!--<link rel="stylesheet" href="style/large.css" media="screen and (min-width: 960px)">-->
        <title>Alle b&aelig;rer alle - K&oslash;benhavn</title>
    </head>
    <body>
     <!-- her starter den store box det hele ligger i -->
             <div class="container">   
   
<?php include 'menu.php';?>
    <br>
	<!-- her starter indholdet på siden -->       
            <article>
                <br>
                <h1>Om os</h1>
                
                <br>
           <?php
        $sql = 'SELECT description  FROM about';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($po);
         while($stmt->fetch()){
             echo  $po;
            
         }
         
?> 
    </article>  
        <br>
        
        <div id="overfooter"><?php include 'footer.php'; ?></div>
        
    </div>
        <?php
        // put your code here
        ?>
    </body>
</html>