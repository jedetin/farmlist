<?php 
session_start();
$dba = mysqli_connect('localhost', 'root', '', 'farmlist');
$id = $_POST['id'];
$acode = $_POST['acode'];

if (isset($_POST['id'])) {
$querya = "SELECT * FROM vendors WHERE id='$id' AND acode='$acode'";
        $resulta = mysqli_query($dba, $querya);
        if (mysqli_num_rows($resulta) == 1) {
          $_SESSION['id'] = $id;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        } else {
            echo "Wrong username/password combination";
        }
}
?>