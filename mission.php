
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
                <div class="container">
                  <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
               <h3 class="form_head">Vision</h3>
                   <p style="padding:12px;font-size: 14px; font-weight: lighter;">To be a prominent community member known for meeting the healthcare needs of the entire community through incomparable patient care and wellness programs. 
To provide Quality & Corporate Health Care at low cost to every individual even they are at Above Poverty Line /Below Poverty Line.
</p>  
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <h3 class="form_head">Mission</h3>
                   <p style="padding:12px;font-size: 14px;font-weight: lighter;">To be a provider of high quality patient-focused health care that is readily accessible, cost effective and meets the needs of the communities we serve.</p> 
            </div>
            <div class="col-md-6">
               
            </div>
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
  