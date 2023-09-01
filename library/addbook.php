<?php
     $con=new mysqli("localhost","root","","db_library");
		if($con->connect_error)
		{
			die("Connection failed:".$con->connect_error);
		}
		
		if (isset($_POST['addbook']))
			
		{
			$bookid=$_POST['bookid'];
			$bookname=$_POST['bookname'];
			$authorname=$_POST['authorname'];
			if($bookid=="" or $bookname=="" or $authorname=="")
			{
				echo "<script>alert('Fill all fields')</script>";
			}
			else
			{
			
			$sql="INSERT INTO tb_books(bookid,bookname,authorname)VALUES('$bookid','$bookname','$authorname')";
				 if($con->query($sql))
				 {
					 echo "<script>alert('New book added successfully')</script>";
				 }
				 else
				 {
					 echo "<script>alert('You have entered same book id')</script>";
				 }
			
		    }
		}
		$con->close();
		
		
		
		
		
		
		