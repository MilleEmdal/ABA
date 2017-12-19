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
                
                <?php

	if (empty($sid)){
		$sid = filter_input(INPUT_GET, 'sid', FILTER_VALIDATE_INT) 
			or die('Missing/illegal sid parameter');	
	}
	//require_once('dbcon/dbcon.php');
	$sql = 'SELECT privatOne, privatTwo, erhverOne, erhverTwo  FROM prices';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('i', $sid);
	$stmt->execute();
	$stmt->bind_result($saname);
	while($stmt->fetch()){} 
?>

<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Rename stilart</legend>
    	<input name="sid" type="hidden" value="<?=$sid?>" />
    	<input name="saname" type="text" value="<?=$saname?>" />
    	<button name="cmd" type="submit" value="rename_stilart">Save new name</button>
	</fieldset>
</form>
                
    </article>  
       <br>
        
        <div id="overfooter"><?php include '../footer.php'; ?></div>
        
    </div>
        
    </body>
</html>
