<?php
if(isset($_POST['submit'])){
  echo '<h3>' . $_POST['username'] . '</h3>';
}
if(isset($_GET['id'])){
  echo '<h3>' . $_GET['id'] . '</h3>';
}
?>



<br><br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<label>Username: </label>
	<input type="text" name="username">

	<br><br>

	<label>Password: </label>
	<input type="password" name="password">

	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>