<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Add URL</title>
    
     <!--links-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap&family=Pacifico&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!--links end-->

      <!--script-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous"></script>

   <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
   
    
    <style>


      <?php include "common/header/header.css" ?>
   

      body
      {
        width:auto;
        /*background: linear-gradient(45deg, #00dbde, #fc00ff);*/
        height:auto;
        /*min-height: 100%;*/
        background-repeat: no-repeat;
      }
      textarea
      {
        margin-top:3% !important;
        padding:6px 12px 6px 12px;
        width:100%;
      }

      input[type="text"],input[type="password"],input[type="email"]
      {
        width:100%;
        margin-top:5%;
        padding:6px 12px 6px 12px;
        /*margin-top:5%;*/
        /*margin-bottom:5%*/
        /*padding:1rem;*/
      }

      button
      {
        border-radius: 20%;
        outline: none;
        border:none;
        background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
      }
 
     input[type="button"]
     {
      min-width:80px;
        min-height: 30px;
        /*border-radius: 20%;*/
      display:inline-block;
      font-size:16px;
      margin-top:1rem;

     }
     h1{
      text-align: center;
      font-size: 25px !important;
      font-weight: 400;
    }

     h6
     {
      /*font-size:1vw;*/
      font-size: 14px;
      font-weight: 400;
      /*padding-top:0.5%;*/
     }


      h3
   {
    font-size: 25px;
    font-weight: 400;
   }

   @media only screen and (max-width: 1200px) {

       h1{
      text-align: center;
      font-size: 28px;
      font-weight: 400;
    }

          h3
   {
    font-size: 25px;
    font-weight: 400;
   }

      h6
     {
      /*font-size:1vw;*/
      font-size: 12px;
      font-weight: 400;
     }
input[type="button"]
     {
      min-width:70px;
      min-height: 20px;
      /*border-radius: 20%;*/
      display:inline-block;
      font-size:25px;
      margin-top:1rem;

     }
}

}
    </style>
  </head>
  <body>
 <?php include "common/header/header.php" ?>

<div id="main">
    <div class="container-fluid">
      <div class="row">
          
              <div class="image-container">
                <img src="<?php echo base_url('assets/images/logo-Nams.png');?>">
             </div>
      </div>
    </div>

      <div class="container-fluid">
        <div class="row d-flex justify-content-center" style="margin-top: 30px;padding: 20px">

       <div class="form">
         <form id="upload_form">
         <h3>Create Your Hash link Here!</h3>
         <div class="form-group">
           <label class="label-input100" for="username" class="sr-only">Link Name</label>
           <input  class="form-control" type="text" placeholder="Enter Name" name="name" required>
           <br>

           <label class="label-input100" for="username" class="sr-only">Link for</label>
           <input  class="form-control" type="text" placeholder="Enter purpose of This Link" name="purpose" required>
           <br>

           <label class="label-input100" for="Select Hashing" class="sr-only">Select Your Hashing</label>
           <SELECT class="form-control" name="select_hash" id="select_hash" required>
            <option value="0">------Select Your Hashing-------</option>
             <!-- <option>MD2</option> -->
             <!-- <option>MD3</option> -->
             <option>MD5</option>
             <option>SHA1</option>
             <!-- <option>GHOST</option> -->
             <!-- <option>WHIRLPOOL</option> -->
           </SELECT>
           <br>
           <label class="label-input100" for="username" class="sr-only">Enter Your Link</label><br>
           <textarea name="input_link"  placeholder="Enter Link Here" ></textarea><br>
            <div class="container-contact100-form-btn">
              <div class="wrap-contact100-form-btn">
                <div class="contact100-form-bgbtn"></div>
                <br>
                <button class="contact100-form-btn btn btn-success" id="btnmy" >
                  Submit <i id = 'ladda2' class="fa fa-spinner fa-spin" style="display: none;"></i>
                </button>
                <input type="reset" class="btn btn-danger" value="Reset" />
                  <!-- Reset  -->
                <!-- </button> -->
                <p id="suc" style="color: green; font-weight: bold;display: none">Created Successfully</p>
                </div>
              </div>

            </div>
         </form>
       </div>

</div><!--end row--> 
</div> <!-- /container -->



<div class="container-fluid">
  
</div>

   <script>
$(document).ready(function(){
    $('form').on('submit',function(e){
         e.preventDefault();
         alert($("#select_hash").val());
         if ($("#input_link").val()== ' ' || $("#select_hash").val()== '0') {
          alert('please Enter valid Link Or Select Your Hashing');
         }
         else{

          $('#ladda2').show();
          document.getElementById('btnmy').disabled = true;     
          $.ajax({
                url:'<?php echo base_url('index.php/Welcome/create_link');?>',
                method:'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success:function(data){
                  // alert("put image in div");
                  $("#up_image").empty();
                  $("#up_image").html(data);   
                  $('#ladda2').hide();
                  // window.location.reload(); 
                  // $('#suc').innerhtml(data);
                  document.getElementById("suc").innerHTML = data;
                  $('#suc').show();   
                  document.getElementById('btnmy').disabled = true;        
                }
          });
         }
    });
        
});

   </script>
</div><!--main end-->
  </body>
</html>