<?php 
include_once("db_conection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All the Users</title>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<div class="container">	
	<h2>All the Users</h2>
	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<?php
			$sql="select * from USERS";
			$resultset = mysqli_query($dbcon, $sql) or die("database error:". mysqli_error($dbcon));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
            <div class="card hovercard">
                <div class="cardheader">               
					<div class="avatar">
						<img alt="" src="<?php echo $record['user_name']; ?>">
					</div>
				 </div>
                <div class="card-body info">
                    <div class="title">
                        <a href="#"><?php echo $record['user_name']; ?></a>
                    </div>
                    <div class="desc"><?php echo $record['email']; ?></div>      
					<div class="desc"><?php echo $record['password']; ?></div>								
                </div>

            </div>
			<?php } ?>
        </div>
	</div>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="logout.php">Logout</a>		
	</div>
</div>

</div>
</body>
</html>