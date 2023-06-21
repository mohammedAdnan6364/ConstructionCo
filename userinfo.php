<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'information_schema';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  mysqli_select_db($mysqli,'Project');

$First_name = $_POST['First_name'];
$Last_name= $_POST['Last_name'];
$Email= $_POST['Email'];
$Complaint= $_POST['Complaint'];

$query="insert into userinfodata (First_name,Last_name,Email,Complaint)
values ('$First_name','$Last_name','$Email','$Complaint')";

echo "$query";

    mysqli_query($mysqli,$query);

  $mysqli->close();
  
  header("Location: index.html"); 
  exit; 
?>