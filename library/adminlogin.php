<html>
<head>
  <style>
   body {
  align-items:center;
  background-color:
        }
  .div-1{
   height :35%;
   width:37%;
   border :5px outset orange;
   margin:auto;
   align-items:center;
   }
   .div-1  button
  {

	font-size:11px;
	background-color:pink;
	min-height:30px;
	max-height:px;
	padding:10px;
	width:90%;
	border:4px double #000080;
	border-radius:3px;
  } 
  </style>
</head>
<body>
<h2 style ="text-align:center;color:#FF0000"> ADMIN LOGIN</h2>
<br>
<br>

 <div class="div-1">
	<form method="POST" action="adminpage.php" form="tax-form">
		 <table align="center">
		 <tr>
		 <td>
		 <br>
		 <label style ="color:#FF0000">ADMIN ID</label></td>
		 <td>
		 <br>
		 <input type="text" name="adminid">
		 </td
		 </tr>
		 <br>
		 <br>
		 <tr>
		 <td>
		 <br>
		 <label style="color:#ff0000">PASSWORD</label>
		 <td>
		 <br>
		 <input type="password" name="password">
		 </td>
		 </tr>
		 
		 <table align="center">
			 <tr>
			 <td><br><button type="submit" name="login" value="login">LOGIN</button></td>
			 <td><br><button type="reset" name="reset" value="clear">CLEAR</button></td>
			 </tr>
		 </table>
		 </table>
	 </form>
 </div>  
</body>
</html>
