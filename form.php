
 <label>Name : </label>
        <div class="form-group">
          <input class="form-control" type="text" name="Name">
        </div>
        <label>Is old is your lab : </label>
        <label class="radio-inline">
          <input type="radio" name="existing">Existing
        </label>
        <label class="radio-inline">
          <input type="radio" name="existing">New
        </label>
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