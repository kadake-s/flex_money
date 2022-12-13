
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yoga";


$full=$_POST['full'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$birth=$_POST['birth'];
$age=$_POST['age'];
$month=$_POST['month'];
$batch=$_POST['batch'];
// $cat=$_POST['cat'];
$digit=$_POST['digit'];
$card=$_POST['card'];
$expiry=$_POST['expiry'];
$cvv=$_POST['cvv'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into user(name,email,phone,dob,age,month,batch,Cardno,namefull,expirydate,cvv)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss",$full,$email,$phone,$birth,$age,$month,$batch,$digit,$card,$expiry,$cvv);
   
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

?>