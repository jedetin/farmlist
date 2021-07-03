<?php
//fetch address from users/user
 
$user = $_POST['userid'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmList Bill</title>
    <link href="../assets/css/main.css" rel="stylesheet">
</head>
<body>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'users');
    $query = "SELECT * FROM addr WHERE username ='$user'";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($query_run);
    ?>
<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 
                 <div class="col-sm-12 ">
                     <h5 class="mb-3">User: </h5>
                     <h3 class="text-dark mb-1"><?php echo $row['name'];  ?></h3>
                     <div> <?php echo $row['addr'];  ?><br>
                     <?php echo $row['area'];  ?><br>
                     <?php echo $row['pinc'];  ?></div>
                     <div>Phone: <?php echo $user;  ?></div>
                 </div>
             </div>
             
             
         </div>
         <div class="card-footer bg-white">
             <p class="mb-0">FarmList<br>
             Vadodara</p>
         </div>
     </div>
 </div>
</body>
</html>