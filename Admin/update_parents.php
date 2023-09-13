
 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Parents information</a>
        <div class="dropdown-divider"></div>
    </div> 

        <div class="col-lg-12 mb-3">
          <div class="row">
               <div class="col-lg-6 col-md-6">
                    <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Living together" name="Parent_status[]" id="Living together" <?php if(in_array('Living together', $b)) { echo "checked"; } ?>> <label for="Living together" >Living together</label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Permanently Separated" name="Parent_status[]" id="Permanently Separated" <?php if(in_array('Permanently Separated', $b)) { echo "checked"; } ?>> <label for="Permanently Separated" >Permanently Separated</label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Married Annulled/Legally Separated" name="Parent_status[]" id="Married Annulled/Legally Separated" <?php if(in_array('Married Annulled/Legally Separated', $b)) { echo "checked"; } ?>> <label for="Married Annulled/Legally Separated">Married Annulled/Legally Separated</label>
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Father With another Partner" name="Parent_status[]" id="Father With another Partner" <?php if(in_array('Father With another Partner', $b)) { echo "checked"; } ?>> <label for="Father With another Partner">Father With another Partner</label>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Temporarily Separated" name="Parent_status[]" id="Temporarily Separated" <?php if(in_array('Temporarily Separated', $b)) { echo "checked"; } ?>> <label for="Temporarily Separated">Temporarily Separated</label> 
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Father OFW" name="Parent_status[]" id="Father OFW"> <label for="Father OFW" <?php if(in_array('Father OFW', $b)) { echo "checked"; } ?>>Father OFW</label> 
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Mother OFW" name="Parent_status[]" id="Mother OFW"> <label for="Mother OFW" <?php if(in_array('Mother OFW', $b)) { echo "checked"; } ?>>Mother OFW</label> 
                   </div>
                   <div class="form-check">
                      <input class="form-check-input position-static" type="checkbox" value="Mother With Another Partner" name="Parent_status[]" id="Mother With Another Partner" <?php if(in_array('Mother With Another Partner', $b)) { echo "checked"; } ?>> <label for="Mother With Another Partner">Mother With Another Partner</label> 
                   </div>
                </div>
          </div>
        </div>

        <div class="col-lg-6 mb-3" style="margin-top: 0px;">
            <label style="margin-bottom: 0px;">Name of guardian (if not living w/ parents)</label>
            <input type="text" class="form-control form-control-sm" name="G_Name" placeholder="Name of guardian (if not living w/ parents)" value="<?php echo $row['G_Name']; ?>">
        </div>
        <div class="col-lg-6 mb-3">
            <label style="margin-bottom: 0px;">Address</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="G_Address" placeholder="Address" value="<?php echo $row['G_Address']; ?>">
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <label style="margin-bottom: 0px;">Landline</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="G_Landline" placeholder="Landline" value="<?php echo $row['G_Landline']; ?>">
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <label style="margin-bottom: 0px;">Cellphone</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="G_Contact" placeholder="Cellphone" value="<?php echo $row['G_Contact']; ?>">
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <label style="margin-bottom: 0px;">Relationship w/ Guardian</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="G_Relation" placeholder="Relationship w/ Guardian" value="<?php echo $row['G_Relation']; ?>">
            </div>
        </div>
    
  </div>
 </div>


