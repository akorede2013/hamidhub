<!DOCTYPE html>
<html>
<head>
<title>Children information</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
<center>
<h1 style="color:blue;">PRINCIPAL INFORMATION</h1>
<p style="color:red;">PLESE INPUT UR DETAILS BELOW THANKS FOR THE COOPERATION</p>

 <form action="createprincipalprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" ><br>
   <label for="address">Adress:</label><br>
   <input type="text" id="address" name="address" ><br> 
   <label for="position">Position:</label><br>
    <input type="text" id="position" name="position" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 <a href="parent.php">parent info </a></li>
 <a href="view.php">View info</a></li>
</center>

</body>
</html>
