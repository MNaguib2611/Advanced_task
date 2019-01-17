<?php 

$connect = mysqli_connect("localhost","root","","advanced");

$fname      = $_POST['fname'];
$lname       = $_POST['lname'];
$year       = $_POST['year'];
$month       = $_POST['month'];
$day       = $_POST['day'];
$country   = $_POST['country'];
$username      = $_POST['username'];
$email     = $_POST['email'];
$password  = md5($_POST['password']);
$confirm_password =md5($_POST['confirm_password']);
$birthday      = $year.'/'.$month.'/'.$day;

function valid_email($str) {
return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
 
function strongPassword($pass){
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $special = preg_match('/[w!@$£#%&*\^]/', $pass);
        $number    = preg_match('@[0-9]@', $pass);

        if( !$special || !$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
           return true;
        }else{
            return false;
        }
}


$query   = "SELECT * FROM user1 where email='$email' ";
$queryuser   = "SELECT * FROM user1 where username='$username' ";
$resultuser = mysqli_query($connect,$queryuser);
$result = mysqli_query($connect,$query);
if (mysqli_num_rows($result)>0 ){
     header("Refresh:2; url=login.php");   
}else{
     if (mysqli_num_rows($resultuser)>0) {
        echo "USername already exsists";
     }else{
        if (empty($fname) || empty($lname)|| empty($country) || empty($username)|| empty($email) || empty($password) || empty($confirm_password)){
        echo 'Please fill all fields';
        return false;
        // filter_var($Email, FILTER_VALIDATE_EMAIL)
        }else{
            if ($confirm_password === $password && valid_email($email) && strongPassword($password)){
                $query1 ="INSERT INTO user1(firstName,lastName,birthDay,country,username,email,password)VALUES('$fname','$lname','$birthday','$country','$username', '$email','$password')";
                $result1 = mysqli_query($connect, $query1);
                if($result1) {
                   echo "<script>alert('Registeration Complete'); </script>";
                   require "simpleexample2.php";
                   echo "<a href='login.php'>Login</a>";
                } else {
                   echo "Error in inserting.";
                }
            }else{
               echo 'Please correct the fields';
               return false;
            }

        }
     }

    
}


