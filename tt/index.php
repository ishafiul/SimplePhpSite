<!DOCTYPE>
<html>
<title>IMAGE UPLOADING PAGE</title>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="index.css"></script>
<style>
input[type=text] {
    width: 95%;
    padding: 7px 15px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]{ 
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

 input[type=submit]:hover {
	align:center;
    background-color: #555555;
    color: white;
}
.cck {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
body {
	background-color:rgba(100,200,255,0.5);
}
</style>
</head>
<body><div style="background-color:rgba(100,200,255,0.5);" align="center"><h2></h2></div>
<br><br>
<div style="background-color:rgba(100,200,255,0.5);" align="center">
<form action="uploading.php" method="post" enctype="multipart/form-data">
<h2>Image Uploading Section |<a href="">Technopoints</a></h2><br><br>
<table>								
<tr><td height="70" width="100">Title</td><td><input type="text" required="required" name="ntitle" class="resizedTextbox"><br><br></td></tr>
<tr><td colspan="2"><input type="file" class="cck" name="sfile" id="fileName" accept="image/*"><br><br></td></tr>
<tr><td colspan="2"><input class="cck" type="submit" name="notification" value="Upload"/></td></tr>
</table>
</form>
</div>
</body>
</html>