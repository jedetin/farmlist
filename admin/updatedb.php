<?php
print_r($_POST);
$id = $_POST['id'];
/*
if(!isset($_POST['id'])){
    $connection = mysqli_connect('localhost', 'root', '', 'farmlist');
    $query = "SELECT * FROM prices WHERE id='$_POST['id']";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($query_run);
}
else{
    echo "Error";
    exit;
}
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmlist";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$u101 = $conn->real_escape_string($_POST['101']);
$u101 = $conn->real_escape_string($_POST['101']);
$u102 = $conn->real_escape_string($_POST['102']);
$u103 = $conn->real_escape_string($_POST['103']);
$u104 = $conn->real_escape_string($_POST['104']);
$u105 = $conn->real_escape_string($_POST['105']);
$u106 = $conn->real_escape_string($_POST['106']);
$u107 = $conn->real_escape_string($_POST['107']);
$u108 = $conn->real_escape_string($_POST['108']);
$u109 = $conn->real_escape_string($_POST['109']);
$u110 = $conn->real_escape_string($_POST['110']);
$u111 = $conn->real_escape_string($_POST['111']);
$u112 = $conn->real_escape_string($_POST['112']);
$u113 = $conn->real_escape_string($_POST['113']);
$u114 = $conn->real_escape_string($_POST['114']);
$u115 = $conn->real_escape_string($_POST['115']);
$u116 = $conn->real_escape_string($_POST['116']);
$u117 = $conn->real_escape_string($_POST['117']);
$u118 = $conn->real_escape_string($_POST['118']);
$u119 = $conn->real_escape_string($_POST['119']);
$u120 = $conn->real_escape_string($_POST['120']);
$u121 = $conn->real_escape_string($_POST['121']);
$u121 = $conn->real_escape_string($_POST['121']);
$u122 = $conn->real_escape_string($_POST['122']);
$u123 = $conn->real_escape_string($_POST['123']);
$u124 = $conn->real_escape_string($_POST['124']);
$u125 = $conn->real_escape_string($_POST['125']);
$u126 = $conn->real_escape_string($_POST['126']);
$u127 = $conn->real_escape_string($_POST['127']);
$u128 = $conn->real_escape_string($_POST['128']);
$u129 = $conn->real_escape_string($_POST['129']);
$u130 = $conn->real_escape_string($_POST['130']);
$u131 = $conn->real_escape_string($_POST['131']);
$u131 = $conn->real_escape_string($_POST['131']);
$u132 = $conn->real_escape_string($_POST['132']);
$u133 = $conn->real_escape_string($_POST['133']);
$u134 = $conn->real_escape_string($_POST['134']);


$sql = "UPDATE prices SET `101`=$u101, `101`=$u101 ,`102`=$u102, `103`=$u103, `104`=$u104,`105`=$u105 ,`106`=$u106,`107`=$u107,`108`=$u108, `109`=$u109,`110`=$u110,`111`=$u111,`112`=$u112,`114`=$u114,`115`=$u115,`116`=$u116,`117`=$u117,`118`=$u118,`119`=$u119,`120`=$u120,`121`=$u121,`122`=$u122,`123`=$u123,`124`=$u124,`125`=$u125,`126`=$u126,`127`=$u127,`128`=$u128,`129`=$u129,`130`=$u130,`131`=$u131,`132`=$u132,`133`=$u133,`134`=$u134 WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  header('location: update.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>