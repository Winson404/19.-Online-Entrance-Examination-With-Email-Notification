 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Home and Family Background</a>
        <div class="dropdown-divider"></div>
    </div> 

    <div class="col-lg-12 mb-1" style="margin-top: -5px;">
        <a class="h5 text-primary" href="">Father</a>
    </div> 
    <div class="col-lg-4 mb-3" style="margin-top: 0px;">
        <label style="margin-bottom: 0px;">Father's name</label>
        <input type="text" class="form-control form-control-sm" name="F_Name" placeholder="Enter Father's name" value="<?php echo $row['F_Name']; ?>">
    </div>
    <div class="col-lg-5 mb-3">
        <label style="margin-bottom: 0px;">Father's Address</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="F_Address" placeholder="Father's Address" value="<?php echo $row['F_Address']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Landline</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="F_Landline" placeholder="Father's Landline" value="<?php echo $row['F_Landline']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Cellphone</label>
        <div class="input-group">
          <div class="input-group-text bg-white form-control-sm">+63</div>
          <input type="tel" class="form-control form-control-sm" pattern="[7-9]{1}[0-9]{9}" name="F_Contact" placeholder="9123456789" maxlength="10" value="<?php echo $row['F_Contact']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Educ. Attainment</label>
          <input type="text" class="form-control form-control-sm" name="F_Education" placeholder="Father's Educ. Attainment" value="<?php echo $row['F_Education']; ?>">
    </div>
  
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Occupation</label>
        <input type="text" class="form-control form-control-sm" name="F_Occupation" placeholder="Father's Occupation"  value="<?php echo $row['F_Occupation']; ?>">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Annual Income</label>
          <input type="text" class="form-control form-control-sm" name="F_Annual_Income" placeholder="Father's Annual Income" value="<?php echo $row['F_Annual_Income']; ?>">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Father's Religion</label>
          <input type="text" class="form-control form-control-sm"name="F_Religion" placeholder="Father's Religion" value="<?php echo $row['F_Religion']; ?>" >
    </div>
    
  </div>
 </div>




  <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -5px;">
        <a class="h5 text-primary" href="">Mother</a>
    </div> 
    <div class="col-lg-4 mb-3" style="margin-top: 0px;">
        <label style="margin-bottom: 0px;">Mother's name</label>
        <input type="text" class="form-control form-control-sm" name="M_Name" placeholder="Enter Mother's name" value="<?php echo $row['M_Name']; ?>">
    </div>
    <div class="col-lg-5 mb-3">
        <label style="margin-bottom: 0px;">Mother's Address</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="M_Address" placeholder="Mother's Address" value="<?php echo $row['M_Address']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Landline</label>
        <div class="input-group">
          <input type="text" class="form-control form-control-sm" name="M_Landline" placeholder="Mother's Landline" value="<?php echo $row['M_Landline']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Cellphone</label>
        <div class="input-group">
          <div class="input-group-text bg-white form-control-sm">+63</div>
          <input type="tel" class="form-control form-control-sm" pattern="[7-9]{1}[0-9]{9}" name="M_Contact" placeholder="9123456789" maxlength="10" value="<?php echo $row['M_Contact']; ?>">
        </div>
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Educ. Attainment</label>
          <input type="text" class="form-control form-control-sm" name="M_Education" placeholder="Mother's Educ. Attainment" value="<?php echo $row['M_Education']; ?>">
    </div>
  
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Occupation</label>
        <input type="text" class="form-control form-control-sm" name="M_Occupation" placeholder="Mother's Occupation" value="<?php echo $row['M_Occupation']; ?>" >
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Annual Income</label>
          <input type="text" class="form-control form-control-sm" name="M_Annual_Income" placeholder="Mother's Annual Income" value="<?php echo $row['M_Annual_Income']; ?>">
    </div>
    <div class="col-lg-3 mb-3">
        <label style="margin-bottom: 0px;">Mother's Religion</label>
          <input type="text" class="form-control form-control-sm" name="M_Religion" placeholder="Mother's Religion" value="<?php echo $row['M_Religion']; ?>">
    </div>
    
  </div>
 </div>