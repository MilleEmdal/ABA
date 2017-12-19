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
                <h1>Kontakt</h1>
		<!--<h6>Udfyld venligst de fleter med en *</h6>-->
                <br>
                <p>Har du nogen sp&oslash;rgsm&aring;l er du velkommen til at ringe til os eller du kan udfylde
                    denne formular og vi kontakter dig.
                </p>
                <br>
                <?php
		$cmd = filter_input(INPUT_POST, 'cmd');
		$name = filter_input(INPUT_POST, 'name');
		$phonenb = filter_input(INPUT_POST, 'phonenb');
		$town_n = filter_input(INPUT_POST, 'town_n');
		
		if(empty($cmd)){
			?>
                
                <br>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
			
				
				<input type="text" name="name" placeholder="Name">
                                <br>
                                
				<input type="test" name="phonenb" placeholder="Telefonnr."><br>
                                
				<input type="text" name="town_n" placeholder="By"><br>
                                
                                <textarea name="msg" placeholder="Skriv din besked"></textarea><br>
				<button type="submit" name="cmd" value="Send">Send</button>
				
				
		
		</form>
          	<?php
	}
	else {
		if($cmd == 'Send') {
			require_once('db_con.php');
			$sql = 'INSERT INTO messages (name, phonenb, town_n) VALUES (?, ?, ?)';
			$stmt = $con->prepare($sql);
			$stmt->bind_param('sss', $name, $phonenb, $town_n);
			$stmt->execute();
			
			if ($stmt->affected_rows > 0){
				echo 'Din besked er blevet sendt og vi svare så hurtigt så muligt';
			}
			else {
				echo $email.' ';
			}
		}

		

		//echo '<hr><a href="index.php"> Tilbage</a>';
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