<?php
include '../dbcon.php';
?>
<!DOCTYPE html>

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
if($cmd = filter_input(INPUT_POST, 'cmd')){

	if($cmd == 'rename') {
		$mail = filter_input(INPUT_POST, 'mail') 
			or die('Missing/illegal mail parameter');
                
		$phone = filter_input(INPUT_POST, 'phone') 
			or die('Missing/illegal phone parameter');
		
		$sql = 'UPDATE contact SET Mail=?, phone=? WHERE id=1;';
		$stmt = $link->prepare($sql);
		$stmt->bind_param('ss', $mail, $phone);
		$stmt->execute();
		
		if($stmt->affected_rows > 0){
			echo 'Telefon nummer eller mail er blevet opdateret'.$mail . $phone;
		}
		else {
			echo 'Kunne ikke opdatere telefonnr. eller mail';
		}	
	}
}
?>

<hr>


<?php

	$sql = 'SELECT Mail, phone FROM contact WHERE id=1';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($mail,$phone);
	while($stmt->fetch()){
            echo 'E-mail:  '  .  $mail . '  -  ' . '  Telefonnr.:  ' . $phone . '  -  ' . '  CVR.NR.:  ' . $cvr;
        } 
?>

<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Ret oplysninger</legend>
        <input name="mail" type="email" value="<?=$mail?>" />
        <input name="phone" type="text" value="<?=$phone?>" />
    	<button name="cmd" type="submit" value="rename">Gem oplysninger</button>
	</fieldset>
</form>     
    </article>  
       <br>
        
        <div id="overfooter"><?php include '../footer.php'; ?></div>
        
    </div>
        
    </body>
</html>
