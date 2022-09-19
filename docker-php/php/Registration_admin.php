<html>  
<head lang="en">  
    <meta charset="UTF-8">  
   <!-- <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <title>Registration Admin</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration as Admin</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="Registration_admin.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>   
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="Admin_login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same    
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";

exit();//this use if first is not work then other will not show  
    }  

    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from ADMIN WHERE admin_name='$user_name'";  
    $run_query=mysqli_query($dbcon,$check_email_query); 
    
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('User $user_name is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into ADMIN (admin_name,admin_password) VALUE ('$user_name','$user_pass')";  

    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('Welcome_admin.php','_self')</script>";  
    }  else{
        echo "ERROR: Could not able to execute $insert_user. " . mysqli_error($dbcon);
    }
}  
?>  