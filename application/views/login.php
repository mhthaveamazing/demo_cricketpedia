<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
	.signupcard{
        width: 27rem; 
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        /*height: 30rem;*/
      }

      @media  screen and (max-width: 768px) {
        .signupcard{
        width: 23rem; 
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);
        border-color: white;
        margin-top: 10%;
      }
      

      }

      
    </style>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap&family=Pacifico&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w==" crossorigin="anonymous"></script>

    <title>Cricketpedia Demo Login</title>
  </head>
  <body  style="background-color: #b3cdd1;
background-image: linear-gradient(315deg, #b3cdd1 0%, #9fa4c4 74%);
;background-attachment: fixed;">





  <div id="main">
  <div class="row d-flex justify-content-center" style="margin-top: 7%;">
    
    <div class="card signupcard" style="border-radius: 1.25rem;  box-shadow: 0 4px 8px 0 silver, 0 6px 20px 0 silver; background-color: snow">
        <h2 style="font-weight: 600;color: darkcyan;font-family: 'Bilbo Swash Caps', cursive;font-size: xx-large;">Login Here!! </h2>
        
        <hr style="margin:9px; color: black">
        <br>
        <form id="login">
          <div class="form-group">
            <label>User ID</label>
            <input type="text" name="email" class="form-control" style="border:none; border-bottom: 1px solid black;" required>
           
            <br>
            <label>Password</label>
            <input type="password" name="password" class="form-control" style="border:none; border-bottom: 1px solid black;" required> 
            <p id="incorrect" style="display: none; color: red">Incorrect User Id or Password</a></p>  

            <br>

            <button class="btn btn-info btn-block" type="submit"  style="border-radius: 20px;background-color: #7f5a83;background-image: linear-gradient(315deg, #141B28 0%, #0d324d 74%);opacity: 0.8; border:none">Login <i id = 'ladda2' class="fa fa-spinner fa-spin" style="display: none;"></i></button> 
            <br>
              
                
          </div><!--form group end-->

        </form>
    </div><!--card end-->

  </div><!-- row end-->


</div><!--main end-->


  

  </body>


<script type="text/javascript">
  
	$(document).ready(function(){
	    $('#login').on('submit',function(e){
	         e.preventDefault();
	       $("#ladda2").show();
	          $.ajax({
	                url:"<?php echo base_url('index.php/Login/auth');?>",
	                method:'POST',
	                data:new FormData(this),
	                contentType: false,
	                cache: false,
	                processData:false,
	                success:function(data){
	                  if(data == "Incorrect User Id or Password"){
	                    $("#incorrect").show();
	                   $("#ladda2").hide();
	                    //window.location.reload();
	                  }
	                  else{
	                 window.location.href = "<?php echo base_url('index.php/login/switching')?>";
	                  }

	                            
	                  
	                }
	          });
	    });
	});
</script>
</html>