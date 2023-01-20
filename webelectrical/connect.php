<?php  
die("test");
$email = filter_input(INPUT_POST, 'eemail');
$lname = filter_input(INPUT_POST, 'lname');
$fname = filter_input(INPUT_POST, 'fname');
$password = filter_input(INPUT_POST, 'psw');
$conpass = filter_input(INPUT_POST, 'cpsw');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "webelectrical";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_error() .') '
. mysqli_connect_error());
}
else{
$sql = " select * from admin";
values ('$eemail','$lname','$fname','$psw', '$cpsw')";
if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
               
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>