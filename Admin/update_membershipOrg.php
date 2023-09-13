
 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Membership in Organization</a>
        <div class="dropdown-divider"></div>
    </div> 

    <div class="table-responsive">
        <button type="button" class="btn btn-warning float-right mb-2" id="addmember"><i class="fa-solid fa-square-plus"></i></button>
        <a class="h6 ml-2  text-primary" href="">In school: (from the last school attended.)</a>
        <table class="table table-responsive table-striped table-hover table-bordered table-sm" id="membership_table_field">
            <thead>
                <th width="55%">Name of Organization</th>
                <th width="45%">Position/Title</th>
                <th width="10%">Remove</th>
            </thead>
            <tbody>
                <?php 
                    $id = $row['user_Id'];
                    $fe = mysqli_query($conn, "SELECT * FROM insideschool_org WHERE user_Id='$id'");
                    while ($r = mysqli_fetch_array($fe)) {
                ?>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="School_Org[]"  placeholder="Enter Organization name..." value="<?php echo $r['School_Org']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="School_Position[]"  placeholder="Enter Position/Title..." value="<?php echo $r['School_Position']; ?>">
                    </td>
                    <td>
                        <button class="btn btn-danger" id="removemember"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
        <a class="h6 ml-2  text-primary" href="">Outside school:</a>
        <button type="button" class="btn btn-warning float-right mb-2" id="outsideaddmember"><i class="fa-solid fa-square-plus"></i></button>
        <table class="table table-responsive table-striped table-hover table-bordered table-sm" id="outsidemembership_table_field">
            <thead>
                <th width="55%">Name of Organization</th>
                <th width="45%">Position/Title</th>
                <th width="10%">Remove</th>
            </thead>
            <tbody>
                <?php 
                    $id = $row['user_Id'];
                    $fe = mysqli_query($conn, "SELECT * FROM outsideschool_org WHERE user_Id='$id'");
                    while ($r = mysqli_fetch_array($fe)) {
                ?>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="OutsideSchool_Org[]"  placeholder="Enter Organization name..." value="<?php echo $r['OutsideSchool_Org']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="OutsideSchool_Position[]"  placeholder="Enter Position/Title..." value="<?php echo $r['OutsideSchool_Position']; ?>">
                    </td>
                    <td>
                        <button class="btn btn-danger" id="outsideremovemember"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
  </div>
 </div>


