
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<h2>CAMPS AND CITIES</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<input type="checkbox" name="city[]" value="Mexico" ><label>Mexico</label><br/>
<input type="checkbox" name="city[]" value="Chelsea" ><label>Chelsea</label><br/>
<input type="checkbox" name="city[]" value="Lebanon" ><label>Lebanon</label><br/>
<input type="checkbox" name="city[]" value="Rhode" ><label>Rhode</label><br/>
<input type="checkbox" name="city[]" value="Idaho" ><label>Idaho</label><br/>
<input type="checkbox" name="city[]" value="Amesbury" ><label>Amesbury</label><br/>
<input type="checkbox" name="city[]" value="Dodge" ><label>Dodge</label><br/>
<input type="checkbox" name="city[]" value="Gardena" ><label>Gardena</label><br/>
<input type="submit" name="Submit" value="FIND"/>
  
</form>


    <?php

  $conn = mysqli_connect("localhost","root","","blood");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();}
  echo"<br><br>";
 

  if(isset($_POST['city'])){
    if(in_array('Mexico', $_POST['city'])){
        
        $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp1'";
        $result = $conn->query($sql);
        echo"<h3>MEXICO </h3><br>";
        while($row = $result->fetch_assoc()) {
        echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
    }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Chelsea', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp2'";
      $result = $conn->query($sql);
      echo"<h3>CHELSEA </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Lebanon', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp3'";
      $result = $conn->query($sql);
      echo"<h3>Lebanon </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Rhode', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp4'";
      $result = $conn->query($sql);
      echo"<h3>Rhode </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Idaho', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp5'";
      $result = $conn->query($sql);
      echo"<h3>Idaho </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Amesbury', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp6'";
      $result = $conn->query($sql);
      echo"<h3>Amesbury </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Dodge', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp7'";
      $result = $conn->query($sql);
      echo"<h3>Dodge </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo $row["name"]. "  ::  ". $row["address"]. "  ::   " . $row["bloodgroup"]. "  ::   " . $row["camp"]."<br>";
  }
}}
echo"<br><br>";

if(isset($_POST['city'])){
  if(in_array('Gardena', $_POST['city'])){
      
      $sql = "SELECT name,address,bloodgroup,camp FROM first WHERE camp='camp8'";
      $result = $conn->query($sql);
      echo"<h3>Gardena </h3><br>";
      while($row = $result->fetch_assoc()) {
      echo "NO DONOR FOUND <br>";
  }
}}
echo"<br><br>";





$conn->close(); 


  

?>
	




</body>
</html>