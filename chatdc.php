<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 100px;
}

.left {
  left: 0;
  background-color:blue;
}

.right {
  right: 0;
  background-color:purple;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="split left">
  <div class ="centered">
      KARTHICK
   <form id="chat1" action="regi.php?name=karthick&user=messagee" method="post">
<input  id="messagee" name="messagee" type="text"></input>
<input  type="submit"></input>
</form>

<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'chat');
   $db = mysqli_connect('localhost','root',"",'chat');
   
          $sql = "SELECT name,msg FROM chat";
          $result = mysqli_query($db,$sql);
          while($row = $result->fetch_assoc()) {
            if($row["msg"]=="karthick")
            {
              echo "<br><div align=right >". $row["msg"]. " : ". $row["name"].  "<br></div>";
            }
            else
            {
              echo "<br><div align=left >". $row["msg"]. "  : ". $row["name"].  "<br></div>";
            }
}
?>
</div>
</div>
<div class="split right">
  <div class="centered">
      DHARANEESH
<form id="chat" action="regi.php?name=dharaneesh&user=message" method="post">
<input id="message" name="message" type="text"></input>
<input  type="submit"></input>
</form>
<?php
          $sql = "SELECT name,msg FROM chat";
          $result1 = mysqli_query($db,$sql);
          while($row1 = $result1->fetch_assoc()) {
if($row1["msg"]=="dharaneesh")
            {
              echo "<br><div align=right >". $row1["msg"]. " : ". $row1["name"].  "<br></div>";
            }
            else
            {
              echo "<br><div align=left >". $row1["msg"]. "  : ". $row1["name"].  "<br></div>";
            }
}
?></div>
  </div>

<script>
function myFunction() {
  var x = document.getElementById("myInput").value;
  document.getElementById("demo").innerHTML = "You wrote: " + x;
}
</script>
</body>
</html> 
