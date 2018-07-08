<?php include "includes/databaseConnect.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
    .mar_auto{
    margin: auto;
  }
  h2{
    text-align: center;
  }
  </style>
  <script type="text/javascript">
    
  </script>
<script>
function displaymandal() {
  var district = document.getElementById("district").value;

  if(district)
 {
  if(district == 'district') {
    document.getElementById('display_mandal').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadmandal.php',
  data: {
   district_name:district,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_mandal').disabled= false;
   $( '#display_mandal' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal' ).html("Contact Arun");
 }
}

function displayvillage() {
  var district = document.getElementById("district").value;
  var mandal = document.getElementById("display_mandal").value;

  if(mandal)
 {
  if(mandal == 'mandal') {
    document.getElementById('display_village').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadvillage.php',
  data: {
    district_name:district,
   mandal_name:mandal,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_village').disabled= false;
   $( '#display_village' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal' ).html("Contact Arun");
 }
}
</script>
<script>
function displaymandal1() {
  var district = document.getElementById("district1").value;

  if(district)
 {
  if(district == 'district') {
    document.getElementById('display_mandal1').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadmandal.php',
  data: {
   district_name:district,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_mandal1').disabled= false;
   $( '#display_mandal1' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal1' ).html("Contact Arun");
 }
}

function displayvillage1() {
  var district = document.getElementById("district1").value;
  var mandal = document.getElementById("display_mandal1").value;

  if(mandal)
 {
  if(mandal == 'mandal') {
    document.getElementById('display_village1').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadvillage.php',
  data: {
    district_name:district,
   mandal_name:mandal,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_village1').disabled= false;
   $( '#display_village1' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal1' ).html("Contact Arun");
 }
}
</script>
<script>
function displaymandal2() {
  var district = document.getElementById("district2").value;

  if(district)
 {
  if(district == 'district') {
    document.getElementById('display_mandal2').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadmandal.php',
  data: {
   district_name:district,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_mandal2').disabled= false;
   $( '#display_mandal2' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal2' ).html("Contact Arun");
 }
}

function displayvillage2() {
  var district = document.getElementById("district2").value;
  var mandal = document.getElementById("display_mandal2").value;

  if(mandal)
 {
  if(mandal == 'mandal') {
    document.getElementById('display_village2').disabled= true;
  } else {
  $.ajax({
  type: 'post',
  url: 'loadvillage.php',
  data: {
    district_name:district,
   mandal_name:mandal,
  },
  success: function (response) {
   // We get the element having id of display_mandal and put the response inside it
   document.getElementById('display_village2').disabled= false;
   $( '#display_village2' ).html(response);
  }
  });
}
 }
  
 else
 {
  $( '#display_mandal2' ).html("Contact Arun");
 }
}
function gst() {
  document.getElementById("gst1").disabled = false;
  document.getElementById("gst2").disabled = false;
}
function gstrev() {
  document.getElementById("gst1").disabled = true;
  document.getElementById("gst2").disabled = true;
}
function gst1() {
  document.getElementById("gst3").disabled = false;
  document.getElementById("gst4").disabled = false;
}
function gstrev1() {
  document.getElementById("gst3").disabled = true;
  document.getElementById("gst4").disabled = true;
}
function gst2() {
  document.getElementById("gst5").disabled = false;
  document.getElementById("gst6").disabled = false;
}
function gstrev2() {
  document.getElementById("gst5").disabled = true;
  document.getElementById("gst6").disabled = true;
}
</script>
  <?php include"includes/header.php"; ?>

     <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>
    <!-- Page content -->
    <div id="page-content-wrapper">
                <div class="container" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);">
            
                <h3 class="form_head">Franchises</h3>
                   <p style="padding:12px;font-size: 14px;font-weight: lighter;">SPARSH HEALTH CARE welcomes  Clinics, Pharamacy & Pathology Lab from villages.   </p> 
                   

                      <div class="row">
                        <div class="col-md-4 text-center services_hover1">
          <a href="" data-toggle="modal" data-target="#labs"><img id="emrg" style="margin-top: -27px;" src="images/pharmacy.png" width="260"></a>
          <p style="margin-top: -13px;" class="services_heading">PHARMACIES</p>
           
        </div>

        <div class="modal fade" id="labs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pharmacy Registration Form</h4>
        </div>
        <div class="modal-body">
          <form action="upload.php" method="post">
            <input type="hidden" name="form" value="pharmacy">
       <label>Name : </label>
        <div class="form-group">
          <input class="form-control" type="text" name="Name">
        </div>
        <label>Is old is your lab : </label>
        <label class="radio-inline">
          <input type="radio" name="existing" onclick="gst()">Existing
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing" onclick="gstrev()">New
        </label>
        <div>
          <label>GSTIN : </label>
          <input type="text" id="gst1" disabled="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>DL : </labe>
          <input type="text" id="gst2" disabled="true">
        </div>
        <div class="form-group">
      <label for="sel1">Location : </label>
      <div class="row">
        <div class='col-md-4'>
      <select class="form-control" id="district" onchange="displaymandal()">
        <option value = 'district'>Select District</option>
         <option value = "srikakulam">Srikakulam</option>
           <option value = "anantapur">Anantapur</option>
           <option value = "chittoor">Chittoor</option>
          <option value = "ysr">Y.S.R</option> 
          <option value = "eastgodavari">EAST GODAVARI</option> 
          <option value = "guntur">GUNTUR</option>  
          <option value = "krishna">Krishna</option> 
          <option value = "kurnool">kurnool</option> 
          <option value = "sripottisriramulunellore">NELLORE</option> 
          <option value = "prakasam">PRAKASAM</option>  
          <option value = "visakhapatnam">VISAKHAPATNAM</option> 
          <option value = "vizianagaram">VIZIANAGARAM</option>  
          <option value = "westgodavari">WEST GODAVARI</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_mandal" disabled onchange="displayvillage()">
        <option>Select Mandal</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_village" disabled>
        <option>Village</option>
      </select>
    </div>
    </div>
    </div>
    <div class="form-group">
      <label>Detailed Address : </label>
      <textarea class="form-control"></textarea>
    </div>      
     <div class="form-group">
      <label>Contact Number : </label>
      <input type="text" class="form-control">
    </div> 
    <div class="form-group">
      <label>Permanent Resident : </label>
      <label class="radio-inline">
          <input type="radio" name="existing">Yes
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing">No
        </label>
    </div>
    <div class="form-group">
      <label for="comment">Qualification : </label>
      <textarea class="form-control" id="qualification"></textarea>
    </div>
    <div class="form-group">
      <label>Image : </label>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label>Resume : </label>
      <input type="file" name="image">
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
                      </div>
                  </div>
                        <div class="col-md-4 text-center services_hover">
          <a href="" data-toggle="modal" data-target="#doctors"><img id="emr" src="images/clinics.png" width="200"></a>
          <p class="services_heading">CLINICS</p>
           
            </div>
        <div class="modal fade" id="doctors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Clinic</h4>
        </div>
        <div class="modal-body">
              <form action="upload.php" method="post">
            <input type="hidden" name="form" value="clinic">
       <label>Name : </label>
        <div class="form-group">
          <input class="form-control" type="text" name="Name">
        </div>
        <label>Is old is your lab : </label>
       <label class="radio-inline">
          <input type="radio" name="existing" onclick="gst1()">Existing
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing" onclick="gstrev1()">New
        </label>
        <div>
          <label>GSTIN : </label>
          <input type="text" id="gst3" disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>DL : </labe>
          <input type="text" id="gst4" disabled>
        </div>
        <div class="form-group">
      <label for="sel1">Location : </label>
      <div class="row">
        <div class='col-md-4'>
      <select class="form-control" id="district1" onchange="displaymandal1()">
        <option value = 'district'>Select District</option>
         <option value = "srikakulam">Srikakulam</option>
           <option value = "anantapur">Anantapur</option>
           <option value = "chittoor">Chittoor</option>
          <option value = "ysr">Y.S.R</option> 
          <option value = "eastgodavari">EAST GODAVARI</option> 
          <option value = "guntur">GUNTUR</option>  
          <option value = "krishna">Krishna</option> 
          <option value = "kurnool">kurnool</option> 
          <option value = "sripottisriramulunellore">NELLORE</option> 
          <option value = "prakasam">PRAKASAM</option>  
          <option value = "visakhapatnam">VISAKHAPATNAM</option> 
          <option value = "vizianagaram">VIZIANAGARAM</option>  
          <option value = "westgodavari">WEST GODAVARI</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_mandal1" disabled onchange="displayvillage1()">
        <option>Select Mandal</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_village1" disabled>
        <option>Village</option>
      </select>
    </div>
    </div>
    </div>
    <div class="form-group">
      <label>Detailed Address : </label>
      <textarea class="form-control"></textarea>
    </div>      
     <div class="form-group">
      <label>Contact Number : </label>
      <input type="text" class="form-control">
    </div> 
    <div class="form-group">
      <label>Permanent Resident : </label>
      <label class="radio-inline">
          <input type="radio" name="existing">Yes
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing">No
        </label>
    </div>
    <div class="form-group">
      <label for="comment">Qualification : </label>
      <textarea class="form-control" id="qualification"></textarea>
    </div>
    <div class="form-group">
      <label>Image : </label>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label>Resume : </label>
      <input type="file" name="image">
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        
        <div class="col-md-4 text-center services_hover">
          <a href="" data-toggle="modal" data-target="#hospitals"><img id="telmed" src="images/lab.png" width="165" style="margin-top: 20px"></a>
          <p style="margin-top:8px;" class="services_heading">LABS</p>
            <div class="modal fade" id="hospitals" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Labs Registration Form</h4>
        </div>
        <div class="modal-body">
           <form action="upload.php" method="post" style="text-align: left;">
            <input type="hidden" name="form" value="lab">
       <label>Name : </label>
        <div class="form-group">
          <input class="form-control" type="text" name="Name">
        </div>
        <label>Is old is your lab : </label>
        <label class="radio-inline">
          <input type="radio" name="existing" onclick="gst2()">Existing
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing" onclick="gstrev2()">New
        </label>
        <div>
          <label>GSTIN : </label>
          <input type="text" id="gst5" disabled>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>DL : </labe>
          <input type="text" id="gst6" disabled>
        </div>
        <div class="form-group">
      <label for="sel1">Location : </label>
      <div class="row">
        <div class='col-md-4'>
      <select class="form-control" id="district2" onchange="displaymandal2()">
        <option value = 'district'>Select District</option>
         <option value = "srikakulam">Srikakulam</option>
           <option value = "anantapur">Anantapur</option>
           <option value = "chittoor">Chittoor</option>
          <option value = "ysr">Y.S.R</option> 
          <option value = "eastgodavari">EAST GODAVARI</option> 
          <option value = "guntur">GUNTUR</option>  
          <option value = "krishna">Krishna</option> 
          <option value = "kurnool">kurnool</option> 
          <option value = "sripottisriramulunellore">NELLORE</option> 
          <option value = "prakasam">PRAKASAM</option>  
          <option value = "visakhapatnam">VISAKHAPATNAM</option> 
          <option value = "vizianagaram">VIZIANAGARAM</option>  
          <option value = "westgodavari">WEST GODAVARI</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_mandal2" disabled onchange="displayvillage2()">
        <option>Select Mandal</option>
      </select>
    </div>
    <div class='col-md-4'>
      <select class="form-control" id="display_village2" disabled>
        <option>Village</option>
      </select>
    </div>
    </div>
    </div>
    <div class="form-group">
      <label>Detailed Address : </label>
      <textarea class="form-control"></textarea>
    </div>      
     <div class="form-group">
      <label>Contact Number : </label>
      <input type="text" class="form-control">
    </div> 
    <div class="form-group">
      <label>Permanent Resident : </label>
      <label class="radio-inline">
          <input type="radio" name="existing">Yes
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing">No
        </label>
    </div>
    <div class="form-group">
      <label for="comment">Qualification : </label>
      <textarea class="form-control" id="qualification"></textarea>
    </div>
    <div class="form-group">
      <label>Image : </label>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label>Resume : </label>
      <input type="file" name="image">
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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



      


























