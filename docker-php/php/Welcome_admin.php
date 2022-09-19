<?php  
session_start();  
  
if(!$_SESSION['name'])  
{  
  
    header("Location: Admin_login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration Admin
    </title>  
</head>  
  
<body>  
<h1>Welcome Admin</h1><br>  
<?php  
echo $_SESSION['name'];  
?>  
<h1><a href="Logout_admin.php">Logout here</a> </h1>  
</body>  
  
</html>