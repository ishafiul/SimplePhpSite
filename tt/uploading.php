<?php 
require 'dbconfig.php';
session_start();
$_SESSION['firstname'] = "Technopoints";
if($con == FALSE)
		{
			echo "connection is not done";
		}
			if(isset($_POST['notification'])){
								$title = $_POST['ntitle'];
								$uploadtime = date("Y-m-d H:i:s");
								$cname = $_FILES['sfile']['name'];
			}
								if(!empty($cname))	{	
								$tname = $_FILES['sfile']['tmp_name'];
								$tname = $_FILES['sfile']['tmp_name'];
								$size	= $_FILES['sfile']['size'];
								$name = $_SESSION['firstname'].date("his");
								$fext = pathinfo($cname, PATHINFO_EXTENSION);
								$fire = pathinfo($name,PATHINFO_FILENAME);
								$savename = $fire.".".$fext;
								$finalfile = "upload/$savename";
														}
													if(!empty($cname)){
	 if($size < 500000){
								$check = move_uploaded_file($tname,$finalfile);
								if($check){
								$qry1 = "INSERT INTO `image`(`title`, `imagename`, `time`) VALUES ('$title','$savename','$uploadtime')";
								$test =	mysqli_query($con,$qry1);
								if($test = TRUE){?><script>if(confirm("File Uploaded Sucessfully!!!"))
				
				{	document.location = 'index.php';
				}
				else
				{
					document.location = 'index.php';
				}</script><?php
											}
											else {?><script>if(confirm("file is not uploaded"))
				
				{	document.location = 'index.php';
				}
				else
				{
					document.location = 'index.php';
				}</script><?php
													//echo "file is not uploaded";
												}
								}
	 }
	 else{
		 echo "file size is too large";
		
	 }
 }else
 {	
	
	echo "Please select an file to upload";
 }												
 ?>