<!DOCTYPE html>
<html>
   <head>
      <title>Form</title>
   </head>
   <body>
      <form action="welcome.php" method="post">
         Name:<br> <input type="text" name="name"><br>
         Email:<br> <input type="text" name="email"><br>
         <input type="submit">
      </form>
      <hr> 
      <!-- Welcome: <?php echo $_POST["name"]; ?> <br>
      Your email address is: <?php echo $_POST["email"]; ?> <br> -->
      
   </body>
</html>