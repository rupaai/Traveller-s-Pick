<?php
include 'config.php';
global $connect, $error, $message;
session_start();
//var_dump($_SESSION);

if(isset($_POST['action']))
{
if($_POST['action']=="login")
{

$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$sql = "SELECT lName, userID FROM" . " user WHERE userName = '". $username."' and password = '". $password."'";

$strSQL = mysqli_query($connect, $sql);

$Results = mysqli_fetch_array($strSQL);
if(count($Results)>=1)
{
//$message = $Results['lName']." Login Sucessfully!!";
global $fetchid;
$_SESSION['id'] = $Results['userID'];
$_SESSION['username'] = $Results['lName'];
$_SESSION['loggedin'] = true;
$_SESSION['update'] = false;
$cname = $_SESSION['username'];
$clog = $_SESSION['loggedin'];

}
else
{
//$message = "Invalid email or password!!";

}
//echo $message;
}
elseif($_POST['action']=="signup")
{
$name       = mysqli_real_escape_string($connect,$_POST['username']);
$email      = mysqli_real_escape_string($connect,$_POST['email']);
$password   = mysqli_real_escape_string($connect,$_POST['password']);
$sql = "SELECT" . " emailID FROM ". "user where emailID ='".$email."'";
$result = mysqli_query($connect,$sql);
$numResults = mysqli_num_rows($result);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
{
$message =  "Invalid email address please type a valid email!!";
}
elseif($numResults>=1)
{
$message = $email." Email already exist!!";
}
else {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "country_review";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into" . " user (emailID, password, userName, mName, lName, countrylives) " . "values('" . $email . "', '" .md5($password) . "', '" . $name . "',  NULL, NULL, NULL)";

// $sql = "insert into" ." user (emailID, password, userName, mName, lName, countrylives) "."values('"."labiba.kanij@gmail.com"."', '"."labiba"."', '" ."kanij"."',  NULL, NULL, NULL)";

// use exec() because no results are returned
$conn->exec($sql);
//echo "New record created successfully";
} catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

}
// mysql_query( "insert into user (  userName, emailID, password) values('" ."'$name', '".$email."', '".md5($password)."')");
//  mysql_query("insert into" ." user ( userName, emailID, password) values('" ."'$name', '".$email."', '".md5($password)."')");

echo $message;
}


}

?>
