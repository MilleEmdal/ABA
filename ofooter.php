<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="main.css">    

        <?php
        $sql = 'SELECT mail, phone, CVR  FROM contact';
	$stmt = $link->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($mail,$phone, $cvr);
         while($stmt->fetch()){
             echo 'E-mail:  '  .  $mail . '  -  ' . '  Telefonnr.:  ' . $phone . '  -  ' . '  CVR.NR.:  ' . $cvr. '   ' .PHP_EOL;
         }
     
?> 
 <div id="fb"><a target="_blank" href="https://www.facebook.com/Alle-b%C3%A6rer-alle-K%C3%B8benhavn-191317401450993/?modal=admin_todo_tour"><img src="img/fbpages.jpg" alt=""></a></div>
</body>
</html>


