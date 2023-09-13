<title>Online Entrance Examination | User reports</title>
<?php include 'navbar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Examinee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Examinee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-body">

                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Full name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>JH School Address</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_type='User'");
                        if(mysqli_num_rows($sql) > 0) {
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <td><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['school']; ?></td>
                    </tr>

                    <?php } } else { ?>
                      <td colspan="100%" class="text-center">No record found</td>
                      <tr/>
                    <?php } ?>

                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Full name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>JH School Address</th>
                      </tr>
                  </tfoot>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php include 'footer.php';  ?>
