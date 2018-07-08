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
            
                <h3 class="form_head">Associates</h3>
                   <p style="padding:12px;font-size: 14px;font-weight: lighter;">SPARSH HEALTH CARE welcomes Doctors, Hospitals, Labs & Diagnostics to be Associated.  </p> 
                      <div class="row">
                        <div class="col-md-4 text-center services_hover1">
          <a href="" data-toggle="modal" data-target="#doctors"><img id="emr" src="images/doctors.png" width="280"></a>
          <p style="margin-top: -27px;" class="services_heading">DOCTORS</p>
           
            </div>
        <div class="modal fade" id="doctors" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Doctors Registration Form</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <form action="adddoctor.php" method="post" class="agile_form" enctype="multipart/form-data">
              <fieldset>
            <div class="col-md-6">
              <div class="agileits-left form-group">
              <input type="text" name="name" class="form-control" placeholder="Name of the Doctor" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="qualification" class="form-control" placeholder="Qualification" required="">
            </div>
            <div class="agileits-left form-group" >
            <input type="text" name="speciality" class="form-control" placeholder="speciality">
            </div>
            <div class="s2-w3ls form-group" >
            <input type="text" name="experience" class="form-control" placeholder="Experience">
            </div>
            <div class="s2-w3ls form-group" >
              <input type="text" name="contact" class="form-control" placeholder="Contact Number:" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="landline" class="form-control" placeholder="Landline number" >
            </div>            
            <div class="agileits-left form-group">
              <input type="text" name="consultationfee" class="form-control" placeholder="Enter Consultation fees" required="">
            </div>
             

            </div>


            <div class="col-md-6">
              <div class="agileits-left form-group" >
              <input type="text" name="keycontact" class="form-control" placeholder="Key Contact Number:" >
            </div>
            <div class="s2-w3ls form-group" >
              <input type="text" name="address" class="form-control" placeholder="Address" required="">
            </div>
            <div class="agileits-left form-group" >
              <input type="text" name="landmark" class="form-control" placeholder="Landmark" >
            </div>
            <div class="s2-w3ls form-group" >
              <input type="text" name="district" class="form-control" placeholder="District" required="">
            </div>
            <div class="agileits-left form-group">
              
              <input type="text" name="pincode" class="form-control" placeholder="Pin Code" required="">
            </div>
             <div class="s2-w3ls form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Adress" >
            </div>
            <div class="agileits-left form-group">
              <label>Upload Image</label>
              <input type="file" name="image" placeholder="Upload doctor image">
            </div> 
            </div>


          </div>
    
            
              <div class="agileits-left check form-group">
              <h2>Out Patient Department</h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="opd1">
                <p class="text-center">OPD 1</p>
                <div class="form-group">
                <input type="text" name="hospitalname1" class="form-control" placeholder="Clinic name">
                </div>
                <div class="form-group">
                <input type="text" name="location1" class="form-control" placeholder="location name">
                </div>
                <div class="form-group">
                <input type="text" name="contact1" class="form-control" placeholder="Contact Number:" >
                </div>
                <div class="form-group">      
                <input type="text" name="morningtiming1" class="form-control" placeholder="Morning time" />
                </div>
                <div class="form-group">
                <input type="text" name="eveningtiming1" class="form-control" placeholder="Evening Time"  /><br><br><br>
                </div>
                <center>
                <br><br>
              </center>
            </div>
                </div>
                <div class="col-md-6">
                   <div class="opd3">
                  <p class="text-center">OPD 2</p>
                  <div class="form-group">
                <input type="text" name="hospitalname2" class="form-control" placeholder="Clinic name">
              </div>
                <div class="form-group">
                <input type="text" name="location2" class="form-control" placeholder="location name">
              </div>
                <div class="form-group">
                <input type="text" name="contact2" class="form-control" placeholder="Contact Number:" >
              </div>
                <div class="form-group">
                <input type="text" name="morningtiming2" class="form-control" placeholder="Morning time" />
              </div>
                <div class="form-group">
                <input type="text" name="eveningtiming2" class="form-control" placeholder="Evening Time"  /><br><br><br>
              </div>
                <center>
                <br><br>
              </center>
                </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="opd2">
                    <p class="text-center">OPD 3</p>
                              <div class="form-group">
                <input type="text" name="hospitalname3" class="form-control" placeholder="Clinic name">
                </div>
                <div class="form-group">
                <input type="text" name="location3" class="form-control" placeholder="location name">
                </div>
                <div class="form-group">
                <input type="text" name="contact3" class="form-control" placeholder="Contact Number:" >
                </div>
                <div class="form-group">
                <input type="text" name="morningtiming3" class="form-control" placeholder="Morning time" />
                </div>
                <div class="form-group">
                <input type="text" name="eveningtiming3" class="form-control" placeholder="Evening Time" /><br><br><br>
                </div>
                <center>
                  
              </center>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="opd4">
                    <p class="text-center">OPD 4</p>
                <div class="form-group">
                <input type="text" name="hospitalname4" class="form-control" placeholder="Clinic name">
              </div>
                <div class="form-group">
                <input type="text" name="location4" class="form-control" placeholder="location name">
              </div>
                <div class="form-group">
                <input type="text" name="contact4" class="form-control" placeholder="Contact Number:" >
              </div>
                <div class="form-group">
                <input type="text" name="morningtiming4" class="form-control" placeholder="Morning time" />
              </div>
                <div class="form-group">
                <input type="text" name="eveningtiming4" class="form-control" placeholder="Evening Time" /><br><br>
              </div>
                                <center>
            
              </center>
                </div>
                </div>
              </div>
                
 <div class="form-group">
            <textarea placeholder="Declaration" class="form-control" name="declaration" required=""></textarea>
          </div>
            <div class="text-center">
              <input class="btn btn-primary" type="submit" value="Submit">
            </div>
                
            </div>
    
         
          </fieldset>
        </form>
        </div>
        <div class="modal-footer">
          <p class="text-left"> *** Membership Fee is valid for 1 year from the date of registration.</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        
        <div class="col-md-4 text-center services_hover">
          <a href="" data-toggle="modal" data-target="#hospitals"><img id="telmed" src="images/hospitals.png" width="350" style="margin-top:-20px;"></a>
          <p style="margin-top: -56px;" class="services_heading">CLINICS & HOSPITALS</p>
            <div class="modal fade" id="hospitals" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Clinics & Hospitals Registration Form</h4>
        </div>
        <div class="modal-body">
          <form action="addclinic.php" method="post" class="agile_form" enctype="multipart/form-data">
          <fieldset>
            
            <div class="row">
              <div class="col-md-6">
                <div class="agileits-left form-group">
              <input type="text" name="name" class="form-control" placeholder="Name of the Hospital" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="partner" class="form-control" placeholder="Name of the director" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="keypartner" class="form-control" placeholder="Key contact person name" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="contact" class="form-control" placeholder="Contact Number(Key contact):" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="keycontact" class="form-control" placeholder="Contact Number(Partner Etc):" >
            </div>
             <div class="agileits-left form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
            </div>
            <div class="agileits-left form-group">
              <label>Upload Hospital Image</label>
              <input type="file" name="image" placeholder="Upload Hospital image">
            </div> 
              </div>

              <div class="col-md-6">
                <div class="s2-w3ls form-group">
              <input type="text" name="address" class="form-control" placeholder="Address" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="landmark" class="form-control" placeholder="Landmark" >
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="district" class="form-control" placeholder="District" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="pincode" class="form-control" placeholder="Pincode" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="landline" class="form-control" placeholder="Landline number" >
            </div>
            <div class=" s2-w3ls form-group">
              <input type="web" name="website" class="form-control" placeholder="Your Website">
            </div>
             <div class="agileits-left s2-w3ls form-group">
              <input type="text" name="homeservice" class="form-control" placeholder="Home service Facility" required="">
            </div>
            </div>
            </div>
             
           
            
            <div class="agileits-left check">
              <h2>Select the types of doctors available in this hospital</h2>
              <div class="row">
                <div class="col-md-3 text-left">
                  <div class="checkbox">
                    <label><input type="checkbox" name="residentdoctors" value='1'>Resident doctors</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="icu" value='1'>ICU Facility</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="cardiac" value='1'>Cardiac clinic</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="operation" value='1'>Operation theatres</label>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="checkbox">
                    <label><input type="checkbox"  name="consultants" value='1'>Consultants</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="ventilators" value='1'>Ventilators</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="pathology" value='1'>Pathology Lab</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="icu" value='1'>ICU Facility</label>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="checkbox">
                    <label><input type="checkbox" name="generalbeds" value='1'>General Beds</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="dialysis" value='1'>Resident doctors</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="pharmacy" value='1'>Pharmacy</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="ambulance" value='1'>Ambulance</label>
                  </div>
                </div>
                <div class="col-md-3 text-left">
                  <div class="checkbox">
                    <label><input type="checkbox" name="homeservice1" value='1'>Home service</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="residentdoctors" value='1'>Dialysis unit</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="nursing" value='1'>Nursing care</label>
                  </div>
                </div>
              </div>
              Add other Facilities:
                  <input type="text" class="form-control" name="others" placeholder="Add other tests available in the hospital " />
              </div>
            <br><br>
            <textarea class="form-control" placeholder="Declaration" name="declaration" required=""></textarea>
            <br><br>
            <div class="text-center">
              <input class="btn btn-primary" type="submit" value="Submit">
            </div>
          </fieldset>
        </form>
        </div>
        <div class="modal-footer">
          <p class="text-left"> *** Membership Fee is valid for 1 year from the date of registration.</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        </div>

        <div class="col-md-4 text-center services_hover">
          <a href="" data-toggle="modal" data-target="#labs"><img id="emrg" src="images/lab.png" width="185" style="margin-top: 35px;"></a>
          <p style="margin-top:2px;" class="services_heading">LABS & DIAGNOSTICS</p>
           
        </div>

        <div class="modal fade" id="labs" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Labs & Diagnostics Registration Form</h4>
        </div>
        <div class="modal-body">
          <form action="addlabs.php" method="post" class="agile_form" enctype="multipart/form-data">
          <fieldset>
            <div class="row">
              <div class="col-md-6">
                <div class="agileits-left form-group">
              <input type="text" name="name" class="form-control" placeholder="Name of the medical centre" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="partner" class="form-control" placeholder="Name of the director" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="keypartner" class="form-control" placeholder="Key contact person name" required="">
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="landline" class="form-control" placeholder="Landline number" >
            </div>

            <div class="agileits-left form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
            </div>
            <div class="agileits-left s2-w3ls form-group">
              <input type="web" name="website" class="form-control" placeholder="Your Website">
            </div>
            <div class="agileits-left s2-w3ls">
              <input type="text" name="homeservice" class="form-control" placeholder="Home service Facility" required="">
            </div>
              </div>

              <div class="col-md-6">
                <div class="s2-w3ls form-group">
              <input type="text" name="contact" class="form-control" placeholder="Contact Number(Key contact):" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="keycontact" class="form-control" placeholder="Contact Number(Partner Etc):" >
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="address" class="form-control" placeholder="Address" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="landmark" class="form-control" placeholder="Landmark" >
            </div>
            <div class="s2-w3ls form-group">
              <input type="text" name="district" class="form-control" placeholder="District" required="">
            </div>
            <div class="agileits-left form-group">
              <input type="text" name="pincode" class="form-control" placeholder="Pincode" required="">
            </div>
            <div class="agileits-left">
              <label>Upload Lab Image</label>
              <input type="file" name="image" class="" placeholder="Upload Lab image">
            </div> 
              </div>
            </div>
            
          
            <div class="agileits-left check">
              <h2>Select the tests available in this clinic</h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="bloodtest" value='1'>Blood Tests
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ultra" value='1'>Ultra Sound Scan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ct" value='1'>CT Scan
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="xray" value='1'>X-Ray
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"  name="mri" value='1'>MRI Scan
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="xray" value='1'>X-Ray
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="agileits-left check">
              <h2>More tests</h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="speech" value='1'>Speech and Audiology
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pharmacy" value='1'>Pharmacy
                    </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="pysio" value='1'>Physiotherapy
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="dietician" value='1'>Dietician
                    </label>
                  </div>
                </div>
              </div>
              
                
                   Add other tests:
                  <input type="text" class="form-control" name="others" placeholder="Add other tests available in the lab " />
                
            </div> <br>
            <textarea class="form-control" name="declaration" placeholder="Declaration" required=""></textarea>
       <br>
            <div class="text-center">
              <input class="btn btn-primary" type="submit" value="Submit">
            </div>
          </fieldset>
        </form>
        </div>
        <div class="modal-footer">
          <p class="text-left"> *** Membership Fee is valid for 1 year from the date of registration.</p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
                      </div>
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



    	