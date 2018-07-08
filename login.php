<style type="text/css">
		.mar_auto{
    margin: auto;
  }
  h2{
  	text-align: center;
  }
	</style>
	

	<?php include"includes/header.php"; ?>

	   <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>
    <!-- Page content -->
    <div id="page-content-wrapper">
    	<div class="container" style="padding:20px 350px;">			
				<h4 class="form_head"><i class="fa fa-angle-right"></i>            
                Login Form</h4>
                    <form method="post" action="">
                      <div class="form-group">
                        <!-- <i class="fa fa-user"></i>-->
                          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required="">
                      </div>
                      <div class="form-group">
                        <!-- <i class="fa fa-envelope-o"></i>-->
                          <input type="email" class="form-control" id="email" placeholder="Enter Your Mail">
                      </div>
                      <div class="form-group">
                        <!-- <i class="fa fa-phone"></i>-->
                          <input type="text" class="form-control" id="number" placeholder="Enter Your Number" required="">
                      </div>
                      <div class="form-group">
                        <!-- <i class="fa fa-phone"></i>-->
                          <select class="form-control">
                          	<option>Anganwadi</option>
                          	<option>PHC's | CHC's</option>
                          	<option>Pharmacies</option>
                          	<option>Labs</option>
                          	<option>Clinics</option>
                            <option>Associates</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <!-- <i class="fa fa-edit"></i>-->
                  <input class="btn btn-info" type="submit" value="Login">
                      </div>
                    </form>			
		</div>
		<br>
		<?php include"includes/footer.php"; ?>	
    </div>

 <script>

  /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        
    });
  </script>
	
				
