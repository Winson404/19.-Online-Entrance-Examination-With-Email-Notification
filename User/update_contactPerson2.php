
 <div class="tab">
   <div class="row">
    
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
                        <input type="text" class="form-control" value="High School:" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="HS_School"  placeholder="Enter school name here..." value="<?php echo $row['HS_School']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="HS_Place"  placeholder="Enter School Address here..." value="<?php echo $row['HS_Place']; ?>">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="HS_DateAttended"  placeholder="Date Attended" value="<?php echo $row['HS_DateAttended']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="College:" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="College_School" placeholder="Enter school name here..." value="<?php echo $row['College_School']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="College_Place" placeholder="Enter School Address here..." value="<?php echo $row['College_Place']; ?>">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="College_DateAttended" placeholder="Date Attended" value="<?php echo $row['College_DateAttended']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="Vocational:" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Voc_School" placeholder="Enter school name here..." value="<?php echo $row['Voc_School']; ?>">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="Voc_Place" placeholder="Enter School Address here..." value="<?php echo $row['Voc_Place']; ?>">
                    </td>
                    <td>
                        <input type="date" class="form-control" name="Voc_DateAttended" placeholder="Date Attended" value="<?php echo $row['Voc_DateAttended']; ?>">
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
  </div>


