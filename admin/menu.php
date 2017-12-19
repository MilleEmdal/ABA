<?php
include 'dbcon.php';
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
          <link rel="stylesheet" href="main.css">
        <!--<link rel="stylesheet" href="style/medium.css" media="screen and (min-width: 600px)">-->
        <!--<link rel="stylesheet" href="style/large.css" media="screen and (min-width: 960px)">-->
       <script type="text/javascript">
            
            // A $( document ).ready() block.
            $( document ).ready(function() {
                console.log( "ready!" );
            });
            
            // Shorthand for $( document ).ready()
                //$(function() {
                    //console.log( "ready!" );
                //});
        </script>
        
        <script>
function myFunction() {
    var x = document.getElementById("Mynav");
    if (x.className === "menu") {
        x.className += " responsive";
    } else {
        x.className = "menu";
    }
}
</script>
    </head>
    <body>
        <nav><ul class="menu" id="Mynav">
            <li><a class="active" href="../index.php">Forside</a></li>
            <li><a href="../prices.php">Priser</a></li>
            <li><a href="../about.php">Om os</a></li>
            <li><a href="../contact.php">Kontakt</a></li>
            <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>
</nav> 
    </body>
</html>
