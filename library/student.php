<html>
<style>
 .div-1{
   height :44%;
   width:30%;
   border :10px outset blue;
   margin:auto;
   align-items:center;
   }
  </style> 
<body>
<h2 style align="center"> STUDENT DETAILS</h2>
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
			<div class="div-1">
			<br>
			<br>
			<table style align="center" border="black">	
			
			<tr>
			
			<td><br><?php echo "STUDENT ID       :"?></td>
			
            <td><br><?php echo $row["studentid"];?></td>
			</tr>
			
			<tr>
			<td><br><?php echo "STUDENT NAME     :" ?></td>
			<td><br><?php  echo $row["studentname"];?></td>
			</tr>
			<br>
			
			<td><br><?php echo "BORROWED BOOKID  :" ?></td>
			<td><br><?php echo $row["bookid"];?></td>
			</tr>
			
			<tr>
			<td><br><?php echo "BOOKNAME   		 :" ?></td>
			<td><br><?php echo $row["bookname"];?></td>
			</tr>
			</table>
			<br>
			<br>
			</div>
		<?php
			
		}
		}
		else
		{
		echo  "<script>alert('NO RECORDS FOUND')</script>";
		}
			
	}
	$con->close();
	
	?>	
</body>
</html>
			