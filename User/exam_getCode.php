<title>Online Entrance Examination | Examinations</title>
<?php 
    include 'navbar.php'; 
    // include '../sweetalert_messages.php';  
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Verification code</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Verification code</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-header">
                <h5><span id="timer">Verification step</span> <span id="countdown"></span></h5>
              </div>
              <form action="process_save.php" method="POST">
                <div class="card-body">
                      <div class="form-group p-3">
                        <label for="">Enter password sent to your email</label>
                        <input type="hidden" class="form-control" name="user_Id" value="<?php echo $id; ?>">
                        <input type="hidden" class="form-control" name="emailedPassword" value="<?php echo $row['password']; ?>">
                        <input type="text" class="form-control" name="inputtedPassword" maxlength="6" minlength="6">
                      </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn bg-gradient-primary"style="display: block;margin-left: auto;margin-right: auto;" name="verify_entered_Code">Proceed</button>
                </div>
              </form>
            </div>
         </div>
        </div>
      </div>
    </section>

</div>


<?php include 'footer.php'; ?>
 

