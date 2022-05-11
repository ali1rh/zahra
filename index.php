<!DOCTYPE html>
<html>
<head>
	<title>دیتالاگر الیپی</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>سامانه دیتالاگر</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>یوزر نیم</label>
     	<input class="EHH__input" type="text" name="uname" placeholder="یوزر نیم خود را وارد کنید"><br>

     	<label>پسورد</label>
     	<input class="EHH__input" type="password" name="password" placeholder="پسورد خود را وارد کنید"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>