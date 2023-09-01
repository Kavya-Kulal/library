<html>
<head>

  <style>
  
   body
   {
  align-items:center;
  background-color:#cccccc;
   }
  .div-1
  {
   height :30 px;
   width:20%;
   border :2px outset red;
   margin: auto;
  }
  .div-1  button
  {
	border:10px;
	padding:15px 32px;
	font-size:10px;
	background-color:none;
	min-height:30px;
	max-height:120px;
	padding:15px;
	width:100%;
	border:4px double #000080;
	border-radius:3px;
	
  }
  </style>
</head>
<body>
 <br>
	<?php
	$con=new mysqli("localhost","root","","db_library");
	if($con->connect_error)
	{
		die("Connection failed:".$con->connect_error);
	}
	
	if(isset($_POST['login']))
    {
	 $adminid=$_POST['adminid'];
	 $password=$_POST['password'];
	
     $sql="select * from tb_admin  where adminid='$adminid' and password='$password'";
     
	 $result=$con->query($sql);
	  
	 if($result->num_rows>0)
		{
		?>	
		<h2 style align="center"> ADMIN PAGE
		</h2>
		<form method="POST" action="admin.php">
		<label><?php echo "<script>alert('YOU HAVE LOGGED SUCCESSFULLY')</script>";?>
		</label>
		<div class="div-1" >
		<button type="submit" name="addbook">ADD BOOKS</button>
		</div>
		<br>
		<div class="div-1" >
		<button type="submit" name="issuedbook">ISSUE BOOKS</button></td>
	    </div>
		<br>
		<div class="div-1" >
		<button type="submit" name="returnbook">RETURN BOOKS</button>
		</div>
		<br>
		<div class="div-1" >
		<button type="submit" name="change">CHANGE PASSWORD</button>
		</div>
		<br>


		</div>
		<?php
		
		}	
		else
		{
			echo"<script>alert('USER ID AND PASSWORD NOT MATCHES')</script>";
		}
		
		
	}
	$con->close();
	
	?>
	</form>
       
</body>
</html>
