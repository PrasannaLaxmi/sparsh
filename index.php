
<!-- Include the above in your HEAD tag -->
<?php include"includes/header.php"; ?>

    <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>
    <!-- Page content -->
    <div id="page-content-wrapper">
      <?php include "includes/carous.php"; ?>
<br>
      <div class="container" style="padding:0px 50px;">
  <ul class="nav nav-tabs text-center nav-justified menu1" style="background-color: #00a2e8;font-weight: lighter;">
    <li class="active"><a data-toggle="tab" href="#home">VIEW EMR|EHR</a></li>
    <li><a data-toggle="tab" href="#menu1">SPARSH E-HEALTH DOCTORS</a></li>
    <!--<li><a data-toggle="tab" href="#menu2"></a></li>-->
  </ul>

  <div class="tab-content  tab-content1" style="box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);height:190px;">
    <div id="home" class="tab-pane fade in active text-center">
      <h3 class="text-center" style="padding-top: 20px;">View your EMR</h3>
      <p style="font-weight: lighter;text-align: justify;padding:10px 50px;">SPARSH EMR is capable to archive the scanned documents or past records of patients in order to be tagged with patient ID according to the case to make retrieval possible at later stage.</p>
      <a href="" class="btn btn-info input_margin" data-toggle="modal" data-target="#log_pwd">LOGIN WITH ID AND PASSWORD</a>

      <div class="modal fade" id="log_pwd" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
                  <input class="form-control" type="text" name="id" placeholder="Login ID" required="">
                </div>
            <div class="form-group">
                  <input class="form-control" type="text" name="state" placeholder="Password" required="">
            </div>
            <div class="text-center">
              <input type="submit" value="Login" class="btn btn-info">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      <!--<form>
        <div class="form-group">
          <i class="fa fa-search fa-2x" aria-hidden="true" style="float:left;color:#00a2e8;"></i>
          <input class="form-control search_box" type="text" placeholder="Search Lab Name & Test Name (MRI,CBC,etc.)" style="width:97%;">
        </div>
      </form>-->
    </div>
    <div id="menu1" class="tab-pane fade text-center">
      <h3 class="text-center" style="padding-top: 20px;">Search for Sparsh Health Doctors </h3>
      <br>
      <form id="search_form">
        <div class="form-group">
          <!--<i class="fa fa-search fa-2x" aria-hidden="true" style="float:left;color:#00a2e8;"></i>-->
          <input class="form-control search_box input_margin" type="text" placeholder="Search for Sparsh Health Doctors ">
        </div>
      </form>
    </div>
    <div id="menu2" class="tab-pane fade text-center">
      <!--<h3 class="text-center" style="padding-top: 20px;">Search Lab Test & Diagnostic Test</h3>
      <form>
        <div class="form-group">
          <i class="fa fa-search fa-2x" aria-hidden="true" style="float:left;color:#00a2e8;"></i>
          <input class="form-control search_box input_margin" type="text" placeholder="Search Lab Name & Test Name (MRI,CBC,etc.)">
        </div>
      </form>-->
    </div>
  </div>
</div><br><br>
<div class="container" style="padding:0px 50px;">
  <p style="font-weight: lighter;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);padding: 50px;">
    75% of India’s healthcare infrastructure is concentrated in urban areas, while more than 75% of the population lives in rural areas, SPARSH HEALTH CARE .
  </p>
</div>
<br><br>
    <div class="container services_images">
      <div class="row">
        <div class="col-md-3 text-center services_hover">
          <a href="emr.php"><img id="emr" src="images/emr.png"></a>
          <p class="services_heading">EMR|EHR</p>
           <!-- <div class="overlay">
              <div class="text">An EHR is a digital version of a patient’s health records. EHRs help eliminate the problems associated with physical records such as loss and lack of accessibility. EHRs can be stored centrally and accessed at any time, irrespective of where or when the information was collected. 6 With EHRs, doctors are able to view their patient’s complete medical history even if they are treating the patient for the first time. This would help reduce duplication of tests and facilitate the secure exchange of information, which in turn helps the patient and the healthcare facilities manage costs.SPARASH HEALTH CARE completely focusing on maintenance of Medical Records / Health Records in digital format to provide quality & better health care services right from RURAL to URBAN and sharing the same with Primary Health Centre / Dist Hospital & Private Hospitals for better services under one record of each individual. 
</div>-->
            </div>
        
        
        <div class="col-md-3 text-center services_hover">
          <a href="telmed.php"><img id="telmed" src="images/telmed.png"></a>
          <p class="services_heading">Tele Medicine</p>
            <!--<div class="overlay">
              <div class="text">Telemedicine, which is the use of telecommunications technology to provide healthcare, could effectively bridge the gap between the patient and the doctor.While telemedicine is not a separate specialty in itself, its standout is the use of various technologies in providing traditional healthcare services. It is a broad concept that covers within its ambit various aspects such as tele-radiology, tele-consultation, tele-nursing, tele-ICU and tele-surgery. Each brings its own advantages and challenges and have to be examined individually in order to be able to run the service efficiently and in compliance with the law.
We are providing emergency medicine services for temporary relief with our specialists Pharmacists / Doctors onboard.
</div>
            </div>-->
        </div>

        <div class="col-md-3 text-center services_hover">
          <a href="telecons.php"><img id="emrg" src="images/emrg.png"></a>
          <p class="services_heading">Tele Consultation</p>
           <!--<div class="overlay">
              <div class="text">Telemedicine, which is the use of telecommunications technology to provide healthcare, could effectively bridge the gap between the patient and the doctor.While telemedicine is not a separate specialty in itself, its standout is the use of various technologies in providing traditional healthcare services. It is a broad concept that covers within its ambit various aspects such as tele-radiology, tele-consultation, tele-nursing, tele-ICU and tele-surgery. Each brings its own advantages and challenges and have to be examined individually in order to be able to run the service efficiently and in compliance with the law.
We are providing emergency medicine services for temporary relief with our specialists Pharmacists / Doctors onboard.
</div>
            </div>-->
        </div>

        <div class="col-md-3 text-center services_hover">
         <a href="rural.php"> <img id="par" src="images/par.png"></a>
          <p class="services_heading">Rural Health Care</p>
           <!--<div class="overlay">
              <div class="text">With a dedicated toll free helpline & network connectivity we are providing EMERGENCY CRITICAL CARE & REGULAR health care services with the help of local MBBS Doctors or RMP/PMP by associating with them as our rural service providers. </div>
            </div>
        </div>-->

      </div>
    </div> </div><br><br><br>
    <!--<div class="container">
      <h3 style="text-align: center;">Popular Health Product Categories</h3>
    </div>-->
    <div class="container" style="padding:0px 50px;">
      <h3 style="text-align: center;">Sparsh E-Health Network</h3>
  <ul class="nav nav-tabs nav-justified" style="background-color: #00a2e8;font-weight: lighter;">
    <li class="active"><a data-toggle="tab" href="#top_sell">Clinics and Hospitals</a></li>
    <li><a data-toggle="tab" href="#seasonal_sell"> Pharmacies</a></li>
    <li><a data-toggle="tab" href="#popular_sell">Labs and Diagnostics</a></li>
  </ul>

  <div class="tab-content">
    <div id="top_sell" class="tab-pane fade in active" style="font-weight: lighter;">
      <h3>HOME</h3>
      
    </div>
    <div id="seasonal_sell" class="tab-pane fade" style="font-weight: lighter;">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="popular_sell" class="tab-pane fade" style="font-weight: lighter;">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
    </div>
    <br>
     <?php include"includes/footer.php"; ?>
    </div>


  <script>


     $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        });
  </script>