<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	form{
	padding:20px;
		margin-left: 40%;
		margin-top: 5%;
		background-color: lightpink;
		width: 250px;
		text-align: center;
	}
	textarea{
		height: 50px;
		width:165px;
	}
	
	</style>
<body>

<form  method="GET" action="/Q1_result.php">
  name:<br>
  <input type="text" name="name" value="">
  <br><br>
  email:<br>
  <input type='text' name='email' value=''>
  <br><br>
  <textarea name="comment" >...</textarea>
  <br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>