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
                <div class="container" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
            
                <h3 class="form_head">What We Do</h3>
                   <p style="padding:12px;font-size: 14px;font-weight: lighter;">SPARSH HEALTH CARE 13 Districts, 676 Mandals and 17039 Villages.</p> 
            
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
  