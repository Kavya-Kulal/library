<html>
<head>
  <style>
   body {
  background-color:FFFFFF;
        }
  .div-1{
   height :50 px;
   width:10 px;
   border :2px solid;
   }
   .div-2{
	    
   height :50 px;
   width:10 px;
   border :2px solid;
		
   }
  
  </style>
</head>
<body>

<h2> STUDENT LOGIN</h2>
 <div class="div-1">
	 <form method="POST" action="student.php" form="tax-form">
     <br>
     <label>STUDENT ID</label>
     <input type="text" name="sid">
	 
     <br>
     <br>
     <button type="submit" name="login" value="login">LOGIN</button>
     <button type="reset" name="reset" value="clear">CLEAR</button>
      </form>
 </div>
 <br>
	<?php
	$con=new mysqli("localhost","root","","db_library");
	if($con->connect_error)
	{
		die("Connection failed:".$con->connect_error);
	}
	
	if(isset($_POST['login']))
    {
	 $sid=$_POST['sid'];
	 
	 
     $sql="select * from tb_student where studentid=$sid";
     
	 $result=$con->query($sql);
	  
	 if($result->num_rows>0)
		{
		while($row=$result->fetch_assoc())
		{
			?>
			<table>
			<tr>
			<td>
			
			<?php echo "STUDENT ID    :" .$row["studentid"];?></td>
			<tr>
			<td><?php echo "STUDENT NAME  :" .$row["studentname"];?></td>
			</tr>
			<tr>
			
			<td><?php echo "BORROWED BOOKID  :" .$row["bookid"];?></td>
			</tr>
			<tr>
			<td><?php echo "BOOKNAME    :" .$row["bookname"];?></td>
			</tr>
			
			<?php
			
		}
		}
		else
		{
		echo  "<script>alert('NO RECORDS FOUND')</script>";
	
		}
			
	}
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		