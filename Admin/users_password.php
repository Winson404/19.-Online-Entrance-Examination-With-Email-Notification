<title>Online Entrance Examination | Examinee's generated password</title>
<?php 
    include 'navbar.php'; 
    if(isset($_GET['key']) && isset($_GET['user_Id'])) {
      $key = $_GET['key'];
      $user_Id = $_GET['user_Id'];
?>

   <div class="modal fade" id="add_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="exampleModalLabel">System Generated Password</h5>
          <a type="button" href="users_add.php" class="close"  aria-label="Close">
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
          <a href="users_add.php" class="btn bg-gradient-primary">OKAY</a>
        </div>
        </form>
      </div>
    </div>
  </div>



<?php } else { include '404.php'; } ?>


<?php include 'footer.php';  ?>
<script>
  $(window).on('load', function() {
        $('#add_users').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
          })
    });
</script>