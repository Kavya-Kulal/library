<?php
     $con=new mysqli("localhost","root","","db_library");
		if($con->connect_error)
		{
			die("Connection failed:".$con->connect_error);
		}
		
		
		
		if (isset($_POST['return']))
		{
			$bookid=$_POST['bookid'];
			$bookname=$_POST['bookname'];
			$authorname=$_POST['authorname'];
            $sid=$_POST['studentid'];
			if($bookid=="" or $bookname=="" or $authorname=="" or $sid=="" )
			{
				echo "<script>alert('Fill all fields')</script>";
			}
			else
			{
			 $sql1="INSERT INTO tb_books(bookid,bookname,authorname)VALUES('$bookid','$bookname','$authorname')";
			 
			 $sql2="DELETE FROM tb_issue  WHERE bookid=$bookid";
			 
			  $sql3="DELETE FROM tb_student  WHERE studentid=$sid";
			 
            $result=$con->query($sql2);
			if($result->num_rows>0)
				 
			{
				 
			 if($con->query($sql2) && $con->query($sql3))
				 {
					echo "<script>alert('BOOK RETURNED SUCCEEFULLY')</script>";
				 }				
			 else
				 {
					 echo "<script>alert('BOOK ID NOT MATCHABLE')</script>";
				 }
			}
			else
			 {
				 echo "<script>alert('BOOK WAS NOT ISSUED')</script>";
			 }
			}			 
		}
		 $con->close();
				 
		
		