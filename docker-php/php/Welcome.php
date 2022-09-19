<?php  
session_start();  
  
if(!$_SESSION['user_name'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>  
  
<body>  
<h1>Welcome User</h1><br>  
<?php  
echo $_SESSION['user_name'];
echo "<script>window.open('view_users_card.php','_self')</script>"; 

?>  
<!-- <h1><a href="logout.php">Logout here</a> </h1>   -->
<!-- <form method="post">
<input class="btn btn-lg btn-success btn-block" type="submit" value="Logout" name="Logout"/> 
</form> -->
<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="logout.php">Logout</a>		
	</div>

<!-- <?php
if(isset($_POST['Logout']))  
{
    echo "<script>window.open('login.php','_self')</script>"; 
}
?> -->
</body>  
  
</html>