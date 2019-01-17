<?php
if (isset( $_POST['username'])) {
	$username = $_POST['username'];
    $password = md5($_POST['password']);
    $connect = mysqli_connect("localhost","root","","advanced");
    $query   = "SELECT * FROM user1 where (username||email)='$username' AND password ='$password'";
    $result = mysqli_query($connect,$query);
    if (mysqli_num_rows($result)>0 ){
    	header("refresh:2; url=Welcome.php");
    }else{
    	echo "login failed";
    }
}




?>