<?php 
     $con=new mysqli("localhost","root","","db_library");
		if($con->connect_error)
		{
			die("Connection failed:".$con->connect_error);
		}
		

        if (isset($_POST['change']))
			
		{
			$userid=$_POST['userid'];
			$password=$_POST['password'];
			
			$sql="UPDATE tb_admin SET password='$password' where adminid='$userid' ";
				 if($con->query($sql))
				 {
					 echo "<script>alert('Password successfully updated.')</script>";
				 }
				 else
				 {
					 echo "<script>alert('Something went wrong!!!')</script>";
				 }
			
		}
		$con->close();
			
			