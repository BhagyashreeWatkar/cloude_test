<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--<?php
		//echo $error_image;
		//echo "<br>";
		//echo $error_name;
	?>-->
<form action="<?php echo base_url().'index.php/welcome/upload/';?>" method="post" enctype="multipart/form-data">
	company name:<input type="text" name="companyname" value="" />
	image:<input type="file" name="userfile">
	<input type="submit" name="submit" value="upload">
</form>
</body>
</html>