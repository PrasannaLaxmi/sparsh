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
                <div class="row" style="margin: 3%;">
            <div class="col-md-6">
                <h4 class="form_head"><i class="fa fa-angle-right"></i>            
                Contact Form</h4>
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
                        <!-- <i class="fa fa-edit"></i>-->
                  <textarea class="form-control" placeholder="Enter Message" required=""></textarea>
                      </div>
                      <div class="form-group text-center">
                      <input class="btn btn-info" type="submit" value="Submit">
                    </div>
                    </form>
            </div>
            <div class="col-md-6">
                <h4 class="form_head"><i class="fa fa-angle-right"></i>
                    Contact Details</h4>
                    <p style="font-weight: lighter;">
                    <i class="fa fa-home" style="font-size: 20px;padding: 5px;"></i>
                    Aarush Empire, 50-102-4,<br>
<span style="padding-left: 30px;">Plot 220, Near HDFC bank,</span><br>
<span style="padding-left: 30px;">Seethammadhara</span><br>
<span style="padding-left: 30px;">Visakhapatnam- 530013.</span><br>

<i class="  fa fa-phone" style="font-size: 20px;padding: 5px;"></i>
Phone: +91-8501927272<br>
<i class="fa fa-envelope" style="font-size: 19px;padding: 5px;"></i>
Email: info@sparshehealth.com
</p>
            </div>
          </div>
            <br>
          <?php include"includes/footer.php"; ?>
        
  
  
    </div>
</div>
 <script>

  /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        
    });
  </script>
  