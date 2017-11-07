<?php
session_start();
if (isset($_POST['submit']))
{
	include_once 'dbconn.php';

	$Topic_db = mysqli_real_escape_string($conn,$_POST['Topic']);
	$Author_db = mysqli_real_escape_string($conn,$_POST['Author']);
	$Abstruct_db = mysqli_real_escape_string($conn,$_POST['Abstruct']);

	$sql = "INSERT INTO file_details (topic,author,abstruct) VALUES ('$Topic_db','$Author_db','$Abstruct_db') ;" ;

	mysqli_query($conn,$sql);
			
}


?>