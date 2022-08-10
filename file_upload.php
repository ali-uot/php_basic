<?php
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if(isset($_POST['submit'])){
	if(!empty($_FILES['upload']['name'])){
		$file_name = $_FILES['upload']['name'];
		$file_size = $_FILES['upload']['size'];
		$file_tmp = $_FILES['upload']['tmp_name'];
		$target_dir = "files/$file_name";
		
		$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
		
		if(in_array($file_ext, $allowed_ext)){
		if($file_size <= 1000000){ // 1000000 bytes = 1MB
			move_uploaded_file($file_tmp, $target_dir);
			echo '<p style="color: #0f0;">File uploaded!</p>';
		}else{
			echo '<p style="color: #f00;">File too large!</p>';
		}
		}else{
			$message = '<p style="color: #f00;">Invalid file type!</p>';
		}
	}else{
		$message = '<p style="color: #f00;">Please choose a file</p>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
</head>
<body>
	<?php echo $message ?? null; ?>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="upload">
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>