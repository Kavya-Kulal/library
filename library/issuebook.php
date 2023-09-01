<?php
     $con=new mysqli("localhost","root","","db_library");
		if($con->connect_error)
		{
			die("Connection failed:".$con->connect_error);
		}
		if (isset($_POST['issuebook']))
		{
			$bookid=$_POST['bookid'];
			$bookname=$_POST['bookname'];
			$authorname=$_POST['authorname'];
            $studentid=$_POST['studentid'];
			$studentname=$_POST['studentname'];
			if($bookid=="" or $bookname=="" or $authorname=="" or $studentid=="" or $studentname=="" )
			{
				echo "<script>alert('Fill all fields')</script>";
			}
			else
			{
			 $sql1="INSERT INTO tb_issue(bookid,bookname,studentid,studentname)VALUES('$bookid','$bookname','$studentid','$studentname')";
			  $sql2="INSERT INTO tb_student(studentid,studentname,bookid,bookname)VALUES('$studentid','$studentname','$bookid','$bookname')";
			 
			 $sql3="DELETE FROM tb_books WHERE bookid=$bookid";
			 
				 if($con->query($sql3));
				
				 {
					 
					 if($con->query($sql2) && $con->query($sql1))
					{
						echo "<script>alert('YOU HAVE ALREADY ONE BOOK,HENCE BOOK ISSUE IS NOT POSSIBLE')</script>";
					}
					else
					{
						echo "<script>alert('BOOK HASN'T NOT ISSUED SUCCESSFULLY')</script>";
					}
				}
				else
					{
					echo "<script>alert('BOOK WAS ALREADY ISSUED TO SOMEONE ')</script>";
					}
			}
			
		}
		$con->close();
		
		
		
		
		
		
		
		
		
		