
 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Person to contact In case of Emergency</a>
        <div class="dropdown-divider"></div>
    </div> 

        <div class="col-lg-6 mb-1" style="margin-top: 0px;">
            <label style="margin-bottom: 0px;">Name</label>
            <input type="text" class="form-control form-control-sm" name="Emerge_Name" placeholder="Name of guardian (if not living w/ parents)" >
        </div>
        <div class="col-lg-6 mb-1">
            <label style="margin-bottom: 0px;">Address</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="Emerge_Address" placeholder="Address" >
            </div>
        </div>
        <div class="col-lg-4 mb-1">
            <label style="margin-bottom: 0px;">Cellphone</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" name="Emerge_Contact" placeholder="Cellphone">
            </div>
        </div>
        <div class="col-lg-12 mt-2">
            <a class="h5 text-primary" href="">Educational/School Information</a>
        <div class="dropdown-divider"></div>
        <table class="table table-responsive table-striped table-hover table-bordered" id="table_field">
            <thead>
                <th>Level</th>
                <th>Name of School</th>
                <th>Place</th>
                <th>Date Attended</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="Elementary:" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Elem_School"  placeholder="Enter school name here...">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Elem_Place"  placeholder="Enter School Address here...">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="Elem_DateAttended"  placeholder="Date Attended">
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
  </div>
 </div>


