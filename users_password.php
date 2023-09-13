<title>Online Entrance Examination | Ssytem Generated Password</title>
<?php include 'navbar.php'; ?>
<?php 
    if(isset($_GET['key']) && isset($_GET['user_Id'])) {
    $key = $_GET['key'];
    $user_Id = $_GET['user_Id'];
  ?>

  <div class="modal fade" id="add_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">System Generated Password</h5>
        <a type="button" href="register.php" class="close"  aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </a>
      </div>
      <div class="modal-body">
        <p class="login-box-msg">Do not share this password. <br>This password will be used during your examination.</p>
        <div class="form-group text-center">
          <h1><?php echo $key; ?></h1>
        </div>
        
        <div class="row">
          <div class="col-12">
            
          </div>
        </div>
      </div>
      <div class="modal-footer alert-light">
        <a href="register.php" class="btn bg-gradient-primary">OKAY</a>
      </div>
      </form>
    </div>
  </div>
</div>



  <div class="content-wrapper" style="background-image: url('images/IMG_20221122_225654-01.jpeg');background-position: cover; background-repeat: no-repeat;background-size: cover; height: 80%;">
    
  </div>


<?php } else { include '404.php'; } ?>

<?php //include 'footer.php'; ?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
</body>
</html>
<script>
  $(window).on('load', function() {
        $('#add_users').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
          })
    });
</script>

<?php include 'sweetalert_messages.php'; ?>
