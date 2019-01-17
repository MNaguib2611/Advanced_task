<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 <style type="text/css">
	#div1{
		height: 150px;
	}
    table{
    	padding: 20px 20px;
    	margin-left: 25px;
    }
    #sub {
    	margin:20px ;
    }
 </style>
</head>
<body class="container">
  <div id="div1"></div>
  <div id="div2" class="col-lg-4 col-lg-offset-4 bg-info">
	<h3>Login</h3>
    <form method="post" action="test.php">
      <table cellpadding="2px" cellspacing="5px" width="100%">
 	  <tr>
	 	<th>Username/Email</th>
	 	<td><input  id="username" type="text" name="username"></td>	
	 	</tr>
	     <th>Password</th>
	     <td><input id="password" type="password" name="password"></td>
	 	<tr>
	 		<tr>
	 			<th>&nbsp;</th>
	 			<td><input id="sub" type="submit" name="submit" value="login" class="btn-success"></td>
	 		</tr>
	 		
	 	</tr>
	 </table>
	</form>
  </div>
</body>
</html>







