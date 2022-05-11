<?php 
session_start();
include ('../con.php');

if (isset($_SESSION['unlock'])) {
    

$tbl = "data";
$order_by = "id";

$my_query = "SELECT * FROM ".$tbl." ORDER BY ".$order_by." DESC";
$result = @mysqli_query ($con, $my_query);

if ($result) {
    
    $row = mysqli_fetch_assoc($result);
    $ic['temperature'] = $row['temperature'];
    
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    
    
    <div class="flex">
        <div class="container">
            <div class="icon">
                <img src="thermometer-half.svg" />

            </div>

            <h1 class="textTemp"><?php echo $ic['temperature']; ?></h1>
        </div>
         <a href="logout.php">Logout</a>
    </div>
    
    
     <!--<h1><?php echo "temperuture: " . $ic['temperature']; ?></h1>-->
     
     <!--<p><?php echo 'hi' ?></p>-->


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>