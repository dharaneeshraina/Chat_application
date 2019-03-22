<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'chat');
   $db = mysqli_connect('localhost','root',"",'chat');
?>
<?php
//background-image:url('a.jpg');
//	$url = 'a.jpg';

if(isset($_POST) & !empty($_POST)){
@$user = $_GET['user'];
if($user == "message")
{
@$message = ($_POST["message"]);
}
else {
	@$message =($_POST["messagee"]);
}
@$name = $_GET['name'];
echo $name;
echo $message;
echo $user;

   
//	$sql = "INSERT INTO test1 (one,two) VALUES ('$one','$two')";
	$sql = "INSERT INTO chat (name, msg) VALUES ('$message','$name')"; 
	$result = mysqli_query($db,$sql);
	if($result)
	{
             header("location:chatdc.php");
	}
	else{
		echo "<h1><br><br><br><br><br><center>FAILED!</h1></center>";	
}
	
}

?>
