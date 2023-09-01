
<html>
<head>
<style>
.div-1
  {
   height :40%;
   width:30%;
   border :5px outset red;
   margin: auto;
   background-color:#FFF8DC;
  }
  .div-2
  {
   height :15%;
   width:20%;
   border :1px outset red;
   margin: auto;
  }
  
  .div-2 button
  {
	border:10px;
	padding:15px 32px;
	font-size:12px;
	background-color:pink;
	min-height:30px;
	max-height:120px;
	padding:10px;
	width:100%;
	border:4px double #000080;
	border-radius:3px;
	
  }
  
</style>
<?php
     $con=new mysqli("localhost","root","","db_library");
		if($con->connect_error)
		{
			die("Connection failed:".$con->connect_error);
		}
		
			if (isset($_POST['addbook']))
			{
				?>
				<form method="post" action="addbook.php">
				<h2 style align="center">ADDING BOOKS TO THE LIBRARY</h2>
				<div class="div-1">
				<table>
				<tr><br><td>BOOK ID</td>
				<td><input type="text" name="bookid" value=""/></td>
				</tr>
				<tr><br><td>BOOK NAME</td>
				<td><input type="text" name="bookname" value=""/></td>
				</tr>
				<tr><br><td>AUTHOR NAME</td>
				<td><input type="text" name="authorname" value=""/></td>
				</tr>
				<tr>
				<td></td>
				</tr>
				</div>
				</table
				<br>
				<br>
				<div class="div-2">
				<button type="submit" name="addbook">ADD</button>
				</div>
				</form>
				<?php
				
			}	
			if(isset($_POST['issuedbook']))
			{
				?>
				
			    <form method="post" action="issuebook.php">
				<h2 style align="center">BOOK ISSUE</h2>
				<div class="div-1">
				<br>
				<table>
				<tr><td><br>BOOK ID</td>
				<td><br><input type="text" name="bookid" value=""/></td>
				</tr>
				<tr><td><br>BOOK NAME</td>
				<td><br><input type="text" name="bookname" value=""/></td>
				</tr>
				<tr><td><br>AUTHOR NAME</td>
				<td><br><input type="text" name="authorname" value=""/></td>
				</tr>
				<tr><td><br>STUDENT ID </td>
				<td><br><input type="text" name="studentid" value=""/></td>
				</tr>
				<tr><td><br>STUDENT NAME</td>
				<td><br><input type="text" name="studentname" value=""/></td>
				</tr>
				</div>
				</table>
				<br>
				<br>
				<div class="div-2">
				<button type="submit" name="issuebook">ISSUE</button>
				</div>
				</form>
				<?php
			}
			if(isset($_POST['returnbook']))
			{
				?>
				
			    <form method="post" action="returnsbook.php">
				<h2 style align="center">BOOK RETURN</h2>
				<div class="div-1">
				<table>
				<tr><td><br>BOOK ID</td>
				<td><br><input type="text" name="bookid" value=""/></td>
				</tr>
				<tr><td><br>BOOK NAME</td>
				<td><br><input type="text" name="bookname" value=""/></td>
				</tr>
				<tr><td><br>AUTHOR NAME</td>
				<td><br><input type="text" name="authorname" value=""/></td>
				</tr>
				<tr><td><br>STUDENT ID</td>
				<td><br><input type="text" name="studentid" value=""/></td>
				</tr>
				</div>
				</table><br>
				<br>
				<div class="div-2">
				<button type="submit" name="return">RETURN</button>
				</div>
				</form>
			
				<?php
			}
				
			if (isset($_POST['change']))
			{
				?>
				<form method="post" action="changepassword.php">
				<h2 style align="center">CHANGE PASSWORD</h2>
				<div class="div-1">
				<table>
				<tr><br><td>USER ID</td>
				<td><br><input type="text" name="userid" value=""/></td>
				</tr>
				<tr><br><td> PASSWORD</td>
				<td><br><input type="text" name="password" value=""/></td>
				</tr>
                </div>
				</table>
				<br>
				<div class="div-2">
				<button type="submit" name="change">OK</button>
				</div>
				<?php
			}
			$con->close();
			
			
			