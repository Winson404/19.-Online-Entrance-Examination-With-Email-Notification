
 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Membership in Organization</a>
        <div class="dropdown-divider"></div>
    </div> 

    <div class="table-responsive">
        <a class="h6 ml-2  text-primary" href="">In school: (from the last school attended.)</a>
        <table class="table table-responsive table-striped table-hover table-bordered table-sm" id="membership_table_field">
            <thead>
                <th width="35%">Name of Organization</th>
                <th width="45%">Position/Title</th>
                <th width="10%">Add/Remove</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="School_Org[]"  placeholder="Enter Organization name...">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="School_Position[]"  placeholder="Enter Position/Title...">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" id="addmember"><i class="fa-solid fa-square-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <a class="h6 ml-2  text-primary" href="">Outside school:</a>
        <table class="table table-responsive table-striped table-hover table-bordered table-sm" id="outsidemembership_table_field">
            <thead>
                <th width="35%">Name of Organization</th>
                <th width="45%">Position/Title</th>
                <th width="10%">Add/Remove</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="OutsideSchool_Org[]"  placeholder="Enter Organization name...">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="OutsideSchool_Position[]"  placeholder="Enter Position/Title...">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" id="outsideaddmember"><i class="fa-solid fa-square-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
  </div>
 </div>


