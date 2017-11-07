<?php
	if (isset($_POST["upload_btn"])) {

		$file_name = $_FILES['fileToUpload']['name'];
		$file_type = $_FILES['fileToUpload']['type'];
		$file_size = $_FILES['fileToUpload']['size'];
		$file_tem_loc = $_FILES['fileToUpload']['tmp_name'];
		$file_store="upload/".$file_name;

		move_uploaded_file($file_tem_loc, $file_store);

		header("location:/Upload page/index.php");
	}
?>