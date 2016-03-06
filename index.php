<?php session_start(); ?>

<html>

 <head>
  <title>Session starter</title>
 <head>

 <body>

 <a href="next.php?sid=<?php echo(session_id()); ?>">Next page</a>
 <hr>

 PHPSESSID = 
 <?php 

  echo ( session_id() ); 

 ?>

 </body>
 
</html>

