 <html>
<head>
	<title>My PHP task</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
        button {
        	margin:10px 0px;
        	font-size: 18px;
        }
		#form-div1{
			margin: 60px 30px 10px 10px ;
			padding: 20px 20px;
			border: 2px solid black;
			box-shadow: 10px 10px 30px green;
		}
	</style>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>
	<div  class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 bg ">
   	 <form method="post" action="registertest.php">
   	 	<div id="form-div1" class="form-group bg-success " style="padding: 10px 30px;">
   	 		<h1 class="text-center visible-lg">Register</h1>
   	 		<h3 class="text-center hidden-lg">Register</h3>

   	 		<label for="fname">First Name</label>
   	 		<input type="text" id="fname" name="fname" class="form-control">
   	 		<label for="lnge">Last Name</label>
   	 		<input type="text" id="lname" name="lname" class="form-control">
            <label>Birthday</label><br>
		      <select id="day" name="day">
		      </select>
		      <select id="month" name="month">
		      </select>
		      <select id="year" name="year"> 
		      </select><br>
		    <label for="country">Country</label>
   	 		<input type="text" id="country" name="country" class="form-control">
   	 		<label for="username">Username</label>
   	 		<input type="text" id="username" name="username" class="form-control">
   	 		<label for="E-mail">E-mail</label>
   	 		<input type="text" id="email" name="email" class="form-control">
   	 		<label for="Password">Password</label>
   	 		<input type="password"  name="password" class="password form-control">
   	 		<label for="confirm_password">confirm password</label>
   	 		<input type="password"   name="confirm_password" class="password form-control">
   	 		<!-- <label>Remember Me ? &nbsp; <input type="checkbox" name="checkbox"></label> -->

   	 		<button class="btn-success btn-block">Register</button>
   	 	</div>
   	 </form>
   </div>
   <script type="text/javascript">
     for (var days = 1; days <= 30; days++) {
       document.getElementById("day").innerHTML+= '<option>'+ days +'</option>';
     }
     for (var months = 1; months <= 12; months++) {
       document.getElementById("month").innerHTML+= '<option>'+ months +'</option>';
     }
     for (var years = 1950; years <= 2010; years++) {
       document.getElementById("year").innerHTML+= '<option>'+ years+'</option>';
     }
     function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
    }

    function strongPassword(pass) {
          var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
          return re.test(pass);
    }      
    
       
   
    $("button").click(function(e) {
      x = validateEmail($("#email").val());
      if (x== false) {
         e.preventDefault(); 
         $('#email').css("border","2px solid red");
      }
    });

     $("button").click(function(e) {
      y = strongPassword($(".password").val());
      if (y== false) {
         e.preventDefault(); 
         $('.password').css("border","2px solid red");
      }
    });
    
   </script>
</body>
</html>