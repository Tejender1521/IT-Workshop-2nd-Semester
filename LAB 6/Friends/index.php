
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<h2>FOOD N FRIENDS</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<input type="checkbox" name="food[]" value="Salmon" ><label>Salmon</label><br/>
<input type="checkbox" name="food[]" value="Lobster" ><label>Lobster</label><br/>
<input type="checkbox" name="food[]" value="Beef" ><label>Beef</label><br/>
<input type="submit" name="submit" value="Submit"/>
  
</form>


    <?php

  $conn = mysqli_connect("localhost","root","","friends");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();}
  echo"<br><br>";
 

  if(isset($_POST['food'])){
    if(in_array('Salmon', $_POST['food'])){
        
        $sql = "SELECT * FROM friends WHERE food='Salmon'";
        $result = $conn->query($sql);
        echo"<h3>THE NAMES AND CONVERSATION OF PEOPLE THAT LIKED SALMON <br>";
        while($row = $result->fetch_assoc()) {
        echo $row["name"]. "  ::  ". $row["conversation"]. "     " . "<br>";
    }
}}
echo"<br><br>";
if(isset($_POST['food'])){
  if(in_array('Lobster', $_POST['food'])){
     
      $sql = "SELECT * FROM friends WHERE food='Lobster'";
      $result = $conn->query($sql);
      echo"<h3>THE NAMES AND CONVERSATION OF PEOPLE THAT LIKED LOBSTER <br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::   ". $row["conversation"]. "     " . "<br>";
  }
}}
echo"<br><br>";
if(isset($_POST['food'])){
  if(in_array('Beef', $_POST['food'])){
     
      $sql = "SELECT * FROM friends WHERE food='Beef'";
      $result = $conn->query($sql);
      echo"<h3>THE NAMES AND CONVERSATION OF PEOPLE THAT LIKED BEEF<br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::   ". $row["conversation"]. "     " . "<br>";
  }
}}




$conn->close(); 


  

?>
	




</body>
</html>