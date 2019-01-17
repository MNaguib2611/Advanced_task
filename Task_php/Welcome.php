<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		body {
			background-image: url(2.png);
			background-repeat: no-repeat;
			background-size: 100%;
		}
		#task{
			margin-top: 50px;
			padding: 25px;
		}
		#innertask2{
			/*opacity: .8 !important;*/
			box-shadow: 0px 0px 30px brown ;

		}
		#list{
			color: white;
			font-family:cursive;
		}
		input[type='text']{ 
			font-size: 18px; 
			margin: 5px 0px;
		}
		#btn-add{
			margin-top: 5px;
			font-size: 18px;
		}
		ul li {
			font-size: 18px;
		}
		.DOED{
			float: right;
			font-size: 12px;
      font-weight: bold;
			margin-right: 5px;
		}
	</style>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
            $("#innertask2").css("opacity", 0.5);
            $("#innertask2").hover(function() {
                   $(this).animate({opacity: 1.0}, 100);
            }, function() {
                    $(this).animate({opacity: 0.5}, 100);
               });       
            });        
                $(document).on("click","#btn-add",function(){
                var listInput1 = $('#listInput').val();
                if (listInput1.length <= 3) {
                    $('#listInput').css("border","2px solid red");
                    setTimeout(alert("Enter at least 4 characters!"),500) ;
                }else{
                  $('#listInput').css("border","none");
                  listInputs = "<li>"+"<span  class='listitems1'>"+listInput1 +"</span>"+
                    '<input value="'+ listInput1 +'"style="color: black; display: none;" class ="inp_id" type="text">' + 
                    "<button class='DOED Done btn-danger'>Done</button>"+
                    "<button class='DOED Edit btn-info'>Edit</button>"+"</li> " ;
                    $('#things').append(listInputs);
                    $('#listInput').val(""); 
                } 
                  $(".DOED").css("opacity", 0.5);
                  $(".DOED").hover(function() {
                     $(this).animate({opacity: 1.0}, 100);
                  }, function() {
                        $(this).animate({opacity: 0.5}, 100);
                  });
               }); 
                 $(document).on("click",".Done",function(){
               var line_through = $(this).parent().children("span").css("text-decoration-line");
               if (line_through=="none") {
                  $(this).parent().children(".listitems1").css("text-decoration-line","line-through");
                  console.log($(this).parent().children(".listitems1").css("text-decoration-line"));
               }else {
                  $(this).parent().children(".listitems1").css("text-decoration-line","none");
                  console.log($(this).parent().children(".listitems1").css("text-decoration-line"));
               }     
               }); 
               $(document).on("click",".Edit",function(){
                   if ( $(this).html() == "Edit"){
                     $(this).html("Confirm");
                     $(this).parent().children(".listitems1").hide();
                     $(this).parent().children(".inp_id").show();
                   }else {
                        var new_task = $(this).parent().children(".inp_id").val();
                        if (new_task.length <= 3) {
                          $(this).parent().children(".inp_id").css("border","2px solid red");
                          setTimeout(alert("Enter at least 4 characters!"),500) ;
                        }else{
                          $(this).html("Edit");
                          $(this).parent().children(".inp_id").css("border","none");
                          $(this).parent().children(".listitems1").html(new_task);
                          $(this).parent().children(".listitems1").show();
                          $(this).parent().children(".inp_id").hide();
                        }
                   }
               });   
		  
	</script>
</head>
<body >
    <div id="task" class="col-md-6 col-md-offset-3">
         <div id="innertask2" class="col-md-10 col-md-offset-1">
    	    <input id="listInput" height="40" class="col-md-9" type="text" placeholder="Ex,Finish javascript task">
    	    <button id="btn-add" class=" col-md-2 col-md-offset-1 btn-success btn-md">Add</button>
        </div><!--innertask-->
    	<br> <br> <br>
    	<div id="list">
    	<h1>My To-Do List</h1>
    	<ul id="things">
    	</ul>
    	</div><!--list-->
    </div><!--task-->
</body>
</html>