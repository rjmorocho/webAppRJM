<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
   <!-- <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <title>Login User</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In User</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="User Name" name="user_name" type="user_name" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>
                    <center><b>Not registered ?</b> <br></b><a href="registration.php">Register here</a></center><!--for centered text-->  
                    <center><b>Login as Admin ?</b> <br></b><a href="Admin_login.php">Login as Admin here</a></center><!--for centered text-->   
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_name=$_POST['user_name'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from USERS WHERE user_name='$user_name' AND password='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo"holaa";
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['user_name']=$user_name;//here session is used and value of $user_name store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('User or password is incorrect!')</script>";  
    }  
}  
?>