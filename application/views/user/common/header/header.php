

<div id="web" style="position: sticky;top:0;z-index: 100">
<div class="row" style="margin-left: 0px; margin-right: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:10px ;background-color: #F4F3EF;">
  <div class="col-md-4">
    <div class="bars" id="openbar" style="display: none;background-color: gray; color: black; width: 50px; height: 50px; border-radius: 50%;position: relative;border: 2px solid black" onclick="openNav()">
      <i class="fa fa-bars" style="position: absolute;top: 11px;left: 12px;font-size: 1.5rem;"></i>
    </div>
    
    <div class="bars" id="closebar" style="margin-left : 53.6%;display:block;background-color: gray; color: black; width: 50px; height: 50px; border-radius: 50%;position: relative;border: 2px solid black" onclick="closeNav()"><i class="fa fa-angle-left" style="position: absolute;top: 9px;left: 16px;font-size: 1.8rem;font-weight: bold;"></i></div>
  </div>
  <div class="col-md-6"><h2 style="margin-top: 8px; text-transform: uppercase;">Marketing Portal</h2></div>
  
</div>




</div><!--web end-->

<div id="myNav" class="overlay">
  <h2 style="color: gray;margin-left: 6%;font-weight: bold">USER</h2>
  <hr style="margin-top: 0rem;">

    
    <a class="a" href="<?php echo base_url('index.php/welcome/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>

    
<!--------------------------------------------------------------------------------------------------------------------------------------------------->
  <a data-toggle="collapse" data-target="#database"  class="a" href="" style="position: relative;"><i class="fa fa-book"></i> URLS<i class="fa fa-caret-down" aria-hidden="true" style=" color: gray;position: absolute;right: 0"></i></a>
    <ul class="sub-menu collapse" id="database" style="color: gray; margin-bottom: 1px; margin-top: 0px;list-style: none;font-size: 0.9rem">
              
                  <li><a href="<?php echo base_url('index.php/welcome/add_url') ?>" style="text-decoration: none"><i class="fa fa-dashboard"></i> Add URL</a></li>
                  <li><a href="<?php echo base_url('index.php/welcome/view_url') ?>"  style="text-decoration: none"><i class="fa fa-dashboard"></i> View URL</a></li>
                  
 
                </ul>

  <a class="a" href="<?php echo base_url('index.php/login/logout') ?>"> <i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a>
  </div>

<div id="mobile">
    <div class="row" style="margin-left: 0px; margin-right: 0px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:10px ">
  <div class="col-3">
    <div class="bars" style="background-color: gray; color: white; width: 50px; height: 50px; border-radius: 50%;" onclick="openNav()"><i class="fa fa-bars" style="position: absolute;top: 15px;left: 30px;font-size: 1.5rem;"></i></div>
    
  </div>
  <div class="col-9"><p style="margin-top: 10px;text-transform: uppercase;font-weight: bold">Marketing Portal</p></div>
</div>
  

</div>


<script>

  var x = window.matchMedia("(max-width: 768px)")
  
    function openNav() {

if (x.matches) {

  document.getElementById("main").style.marginLeft = "20%";
  
  document.getElementById("myNav").style.width = "64%";
  document.getElementById("closebar").style.display = "block";
  document.getElementById("openbar").style.display = "none";

  // document.getElementById("mobileclose").style.display = "block";

  
  }else{
    document.getElementById("main").style.marginLeft = "20%";
    document.getElementById("myNav").style.width = "17.5%";
  document.getElementById("closebar").style.display = "block";
  document.getElementById("openbar").style.display = "none";
  // document.getElementById("closebar").style.marginLeft = "41.6%";
  document.getElementById("closebar").style.transition = "0.5s";
  // document.getElementById("mobileclose").style.display = "none";

  

  }

}

function closeNav() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("myNav").style.width = "0%";
  document.getElementById("closebar").style.display = "none";
  document.getElementById("openbar").style.display = "block";

}






</script>