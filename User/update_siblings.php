
 <div class="tab">
   <div class="row">
    <div class="col-lg-12 mb-1" style="margin-top: -25px;">
        <a class="h5 text-primary" href="">Please name below siblings from eldest to youngest. Include yourself</a>
        <div class="dropdown-divider"></div>
    </div> 

                        
    <div class="table-responsive">
        <button type="button" class="btn btn-warning float-right mb-2" id="add"><i class="fa-solid fa-square-plus"></i></button>
        <table class="table table-responsive table-striped table-hover table-bordered" id="table_field">
            <thead>
                <th width="35%">Name of Sibling</th>
                <th width="45%">School/Place of Work</th>
                <th width="10%">Age</th>
                <th width="10%">Remove</th>
            </thead>
            <tbody>
                <?php 
                    $id = $row['user_Id'];
                    $fe = mysqli_query($conn, "SELECT * FROM siblingsrecord WHERE user_Id='$id'");
                    while ($r = mysqli_fetch_array($fe)) {
                ?>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="Name_Siblings[]" placeholder="Enter name here..." value="<?php echo $r['Name_Siblings']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="School_Place_Work[]" placeholder="Enter School/Place of Work here..." value="<?php echo $r['School_Place_Work']; ?>">
                    </td>
                    <td>
                        <input type="number" class="form-control" name="Siblings_Age[]" placeholder="Age" value="<?php echo $r['Siblings_Age']; ?>">
                    </td>
                    <td>
                        <button class="btn btn-danger" id="remove"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
  </div>
 </div>


