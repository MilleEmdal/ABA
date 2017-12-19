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
                <h2>Priser</h2>
                <br>
                <p>Her ser du en vores priser og alle priserne er uden moms.</p>
                <br>
                
 <?php
        $sql = 'SELECT privatOne, privatTwo, erhverOne, erhverTwo  FROM prices';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($po,$pt, $eo, $et);
         while($stmt->fetch()){
             echo '<h3>Priser privat</h3>' . '  <br>  ' . ' 1 mand og bil '  .  $po . '  <br>  ' . '  2 mand og bil  ' . $pt . '<br>';
             echo '<br>';
             echo '<h3>Priser erhverv</h3>' . '  <br>  ' . ' 1 mand og bil '  .  $eo . '  <br>  ' . '  2 mand og bil  ' . $et;
             
         }
         
?> 
    </article>  
        <br>
        
        <div id="overfooter"><?php include 'footer.php'; ?></div>
        
    </div>
        
    </body>
</html>