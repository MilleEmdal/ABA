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
if($cmd = filter_input(INPUT_POST, 'cmd')){

	if($cmd == 'add_number') {
		$phone2 = filter_input(INPUT_POST, 'phone2') 
			or die('Missing/illegal phone2 parameter');
		
		$sql = 'INSERT INTO contact (phone2) VALUES (?)';
		$stmt = $link->prepare($sql);
		$stmt->bind_param('s', $phone2);
		$stmt->execute();
		
		if($stmt->affected_rows > 0){
			echo $phone2.' as been added ';
		}
		else {
			echo 'Could not create a new phonenumber!!!';
		}	
	}
	
	else {
		die('Unknown cmd: '.$cmd);
	}
}
?>


	<h1>Footer</h1>
	<ul>
<?php
	
	$sql = 'SELECT mail, phone, phone2  FROM contact';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($mail, $phone, $phone2);
	
	while($stmt->fetch()){      
	

	}	
?>
	</ul>
	

	<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
            <legend>Tilf&oslash;j nummer</legend>
    	<input name="phone2" type="text" placeholder="telefonnr" required />
		<button name="cmd" type="submit" value="add_number">Create</button>
	</fieldset>
</form>
                
    </article>  
       <br>
        
        <div id="overfooter"><?php include '../footer.php'; ?></div>
        
    </div>
        
    </body>
</html>
