<?php
$name=$_POST['name']
$phone=$_POST['phone']
$email=$_POST['email']
$text=$_POST['text']
$conn=new mysqli('localhost','root','','ipgp5');
$conn->execute();
if($conn->connect_error){
die('CONNECTION FAILED:'.$conn->connect)}
else{
   $stmt=$conn->prepare("insert into entries(name,phone,email,text) values(?,?,?,?)");
   $stmt->bind_param("siss",$name,$phone,$email,$text);
    $stmt->execute();
    echo"THANKYOU FOR THE EFFORT";
    $stmt->close();
    $conn->close();
}
?>
//<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

//$con = mysqli_connect('localhost', 'root', '','ipgp5');



//if(mysqli_connect_error)
//{
  //  exit('failed to connect to mysql.')
	

//?>