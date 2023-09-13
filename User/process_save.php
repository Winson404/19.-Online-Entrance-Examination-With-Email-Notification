<?php 
	include '../config.php';

	// SAVE ADMIN
	if(isset($_POST['create_admin'])) {
		$user_type			 = $_POST['usertype'];
		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$contact         = $_POST['contact'];
		$email           = $_POST['email'];
		$address         = $_POST['address'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email)>0) {
      $_SESSION['message'] = "Email is already taken.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: admin.php");
		} else {

			if($password != $cpassword) {
        $_SESSION['message'] = "Password does not matched.";
        $_SESSION['text'] = "Please try again.";
        $_SESSION['status'] = "error";
				header("Location: admin.php");
			} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-users/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message'] = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered, user_type) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered', '$user_type')");

                            if($save) {
									          	$_SESSION['message'] = "User information has been successfully saved!";
									            $_SESSION['text'] = "Saved successfully!";
											        $_SESSION['status'] = "success";
															header("Location: admin.php");
									          } else {
									            $_SESSION['message'] = "Something went wrong while saving the information.";
									            $_SESSION['text'] = "Please try again.";
											        $_SESSION['status'] = "error";
															header("Location: admin.php");
									          }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: admin.php");
                      }
				 }

			}

		}

	}








	// SAVE users
	if(isset($_POST['create_user'])) {
		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$contact         = $_POST['contact'];
		$email           = $_POST['email'];
		$address         = $_POST['address'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email)>0) {
      $_SESSION['message'] = "Email is already taken.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: users.php");
		} else {

			if($password != $cpassword) {
        $_SESSION['message'] = "Password does not matched.";
        $_SESSION['text'] = "Please try again.";
        $_SESSION['status'] = "error";
				header("Location: users.php");
			} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-users/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message'] = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO users (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
									          	$_SESSION['message'] = "User information has been successfully saved!";
									            $_SESSION['text'] = "Saved successfully!";
											        $_SESSION['status'] = "success";
															header("Location: users.php");
									          } else {
									            $_SESSION['message'] = "Something went wrong while saving the information.";
									            $_SESSION['text'] = "Please try again.";
											        $_SESSION['status'] = "error";
															header("Location: users.php");
									          }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: users.php");
                      }
				 }

			}

		}

	}




	if(isset($_POST['exam'])) {

		$user_Id = $_POST['user_Id'];
		$date_registered = date('Y-m-d');

		// ENGLISH
		$one        = $_POST['one'];       $correct_one  	    =	$_POST['correct_one'];       $ans_q1  = $_POST['ans_q1'];  $ans_q1  = str_replace("'", "\'", $ans_q1  );
		$two        = $_POST['two'];       $correct_two	      =	$_POST['correct_two'];       $ans_q2  = $_POST['ans_q2'];  $ans_q2  = str_replace("'", "\'", $ans_q2  );
		$three      = $_POST['three'];     $correct_three     =	$_POST['correct_three'];     $ans_q3  = $_POST['ans_q3'];  $ans_q3  = str_replace("'", "\'", $ans_q3  );
		$four	      = $_POST['four'];      $correct_four	    =	$_POST['correct_four'];      $ans_q4	= $_POST['ans_q4'];  $ans_q4	= str_replace("'", "\'", $ans_q4	);
		$five       = $_POST['five'];      $correct_five      =	$_POST['correct_five'];      $ans_q5	= $_POST['ans_q5'];  $ans_q5	= str_replace("'", "\'", $ans_q5	);
		$six	      = $_POST['six'];       $correct_six	      =	$_POST['correct_six'];       $ans_q6  = $_POST['ans_q6'];  $ans_q6  = str_replace("'", "\'", $ans_q6  );
		$seven      = $_POST['seven'];     $correct_seven     =	$_POST['correct_seven'];     $ans_q7	= $_POST['ans_q7'];  $ans_q7	= str_replace("'", "\'", $ans_q7	);
		$eight      = $_POST['eight'];     $correct_eight     =	$_POST['correct_eight'];     $ans_q8	= $_POST['ans_q8'];  $ans_q8	= str_replace("'", "\'", $ans_q8	);
		$nine       = $_POST['nine'];      $correct_nine	    =	$_POST['correct_nine'];      $ans_q9  = $_POST['ans_q9'];  $ans_q9  = str_replace("'", "\'", $ans_q9  );
		$ten	      = $_POST['ten'];       $correct_ten	      =	$_POST['correct_ten'];       $ans_q10 = $_POST['ans_q10']; $ans_q10 = str_replace("'", "\'", $ans_q10 );
		$eleven     =	$_POST['eleven'];    $correct_eleven    =	$_POST['correct_eleven'];    $ans_q11 = $_POST['ans_q11']; $ans_q11 = str_replace("'", "\'", $ans_q11 );
		$twelve     =	$_POST['twelve'];    $correct_twelve    =	$_POST['correct_twelve'];    $ans_q12 = $_POST['ans_q12']; $ans_q12 = str_replace("'", "\'", $ans_q12 );
		$thirteen   =	$_POST['thirteen'];  $correct_thirteen	=	$_POST['correct_thirteen'];  $ans_q13	=	$_POST['ans_q13']; $ans_q13	= str_replace("'", "\'", $ans_q13	);
		$fourteen	  =	$_POST['fourteen'];  $correct_fourteen	=	$_POST['correct_fourteen'];  $ans_q14	=	$_POST['ans_q14']; $ans_q14	= str_replace("'", "\'", $ans_q14	);
		$fifteen	  =	$_POST['fifteen'];   $correct_fifteen	  =	$_POST['correct_fifteen'];   $ans_q15	=	$_POST['ans_q15']; $ans_q15	= str_replace("'", "\'", $ans_q15	);
		$sixteen	  =	$_POST['sixteen'];   $correct_sixteen	  =	$_POST['correct_sixteen'];   $ans_q16	=	$_POST['ans_q16']; $ans_q16	= str_replace("'", "\'", $ans_q16	);
		$seventeen  =	$_POST['seventeen']; $correct_seventeen =	$_POST['correct_seventeen']; $ans_q17	=	$_POST['ans_q17']; $ans_q17	= str_replace("'", "\'", $ans_q17	);
		$eighteen	  =	$_POST['eighteen'];  $correct_eighteen	=	$_POST['correct_eighteen'];  $ans_q18	=	$_POST['ans_q18']; $ans_q18	= str_replace("'", "\'", $ans_q18	);
		$nineteen	  =	$_POST['nineteen'];  $correct_nineteen	=	$_POST['correct_nineteen'];  $ans_q19	=	$_POST['ans_q19']; $ans_q19	= str_replace("'", "\'", $ans_q19	);
		$twenty	    =	$_POST['twenty'];    $correct_twenty	  =	$_POST['correct_twenty'];    $ans_q20	=	$_POST['ans_q20']; $ans_q20	= str_replace("'", "\'", $ans_q20	);

		$remark_one       = ""; if($correct_one       != $ans_q1 ) { $remark_one       = 0; } else { $remark_one       = 1; }
		$remark_two       = ""; if($correct_two       != $ans_q2 ) { $remark_two       = 0; } else { $remark_two       = 1; }
		$remark_three     = ""; if($correct_three     != $ans_q3 ) { $remark_three     = 0; } else { $remark_three     = 1; }
		$remark_four      = ""; if($correct_four      != $ans_q4 ) { $remark_four      = 0; } else { $remark_four      = 1; }
		$remark_five      = ""; if($correct_five      != $ans_q5 ) { $remark_five      = 0; } else { $remark_five      = 1; }
		$remark_six       = ""; if($correct_six       != $ans_q6 ) { $remark_six       = 0; } else { $remark_six       = 1; }
		$remark_seven     = ""; if($correct_seven     != $ans_q7 ) { $remark_seven     = 0; } else { $remark_seven     = 1; }
		$remark_eight     = ""; if($correct_eight     != $ans_q8 ) { $remark_eight     = 0; } else { $remark_eight     = 1; }
		$remark_nine      = ""; if($correct_nine      != $ans_q9 ) { $remark_nine      = 0; } else { $remark_nine      = 1; }
		$remark_ten       = ""; if($correct_ten       != $ans_q10) { $remark_ten       = 0; } else { $remark_ten       = 1; }
		$remark_eleven    = ""; if($correct_eleven    != $ans_q11) { $remark_eleven    = 0; } else { $remark_eleven    = 1; }
		$remark_twelve    = ""; if($correct_twelve    != $ans_q12) { $remark_twelve    = 0; } else { $remark_twelve    = 1; }
		$remark_thirteen  = ""; if($correct_thirteen  != $ans_q13) { $remark_thirteen  = 0; } else { $remark_thirteen  = 1; }
		$remark_fourteen  = ""; if($correct_fourteen  != $ans_q14) { $remark_fourteen  = 0; } else { $remark_fourteen  = 1; }
		$remark_fifteen   = ""; if($correct_fifteen   != $ans_q15) { $remark_fifteen   = 0; } else { $remark_fifteen   = 1; }
		$remark_sixteen   = ""; if($correct_sixteen   != $ans_q16) { $remark_sixteen   = 0; } else { $remark_sixteen   = 1; }
		$remark_seventeen = ""; if($correct_seventeen != $ans_q17) { $remark_seventeen = 0; } else { $remark_seventeen = 1; }
		$remark_eighteen  = ""; if($correct_eighteen  != $ans_q18) { $remark_eighteen  = 0; } else { $remark_eighteen  = 1; }
		$remark_nineteen  = ""; if($correct_nineteen  != $ans_q19) { $remark_nineteen  = 0; } else { $remark_nineteen  = 1; }
		$remark_twenty    = ""; if($correct_twenty    != $ans_q20) { $remark_twenty    = 0; } else { $remark_twenty    = 1; }


// MATH
$twenty_one   = $_POST['twenty_one'];    $correct_twenty_one   =	$_POST['correct_twenty_one'];    $ans_q21 = $_POST['ans_q21']; $ans_q21= str_replace("'", "\'",$ans_q21);
$twenty_two   = $_POST['twenty_two'];    $correct_twenty_two	 =	$_POST['correct_twenty_two'];    $ans_q22 = $_POST['ans_q22']; $ans_q22= str_replace("'", "\'",$ans_q22);
$twenty_three = $_POST['twenty_three'];  $correct_twenty_three =	$_POST['correct_twenty_three'];  $ans_q23 = $_POST['ans_q23']; $ans_q23= str_replace("'", "\'",$ans_q23);
$twenty_four	= $_POST['twenty_four'];   $correct_twenty_four	 =	$_POST['correct_twenty_four'];   $ans_q24	= $_POST['ans_q24']; $ans_q24= str_replace("'", "\'",$ans_q24);
$twenty_five  = $_POST['twenty_five'];   $correct_twenty_five  =	$_POST['correct_twenty_five'];   $ans_q25	= $_POST['ans_q25']; $ans_q25= str_replace("'", "\'",$ans_q25);
$twenty_six	  = $_POST['twenty_six'];    $correct_twenty_six	 =	$_POST['correct_twenty_six'];    $ans_q26 = $_POST['ans_q26']; $ans_q26= str_replace("'", "\'",$ans_q26);
$twenty_seven = $_POST['twenty_seven'];  $correct_twenty_seven =	$_POST['correct_twenty_seven'];  $ans_q27	= $_POST['ans_q27']; $ans_q27= str_replace("'", "\'",$ans_q27);
$twenty_eight = $_POST['twenty_eight'];  $correct_twenty_eight =	$_POST['correct_twenty_eight'];  $ans_q28	= $_POST['ans_q28']; $ans_q28= str_replace("'", "\'",$ans_q28);
$twenty_nine  = $_POST['twenty_nine'];   $correct_twenty_nine	 =	$_POST['correct_twenty_nine'];   $ans_q29 = $_POST['ans_q29']; $ans_q29= str_replace("'", "\'",$ans_q29);
$thirty	      = $_POST['thirty'];        $correct_thirty	     =	$_POST['correct_thirty'];        $ans_q30 = $_POST['ans_q30']; $ans_q30= str_replace("'", "\'",$ans_q30);
$three_one    =	$_POST['three_one'];     $correct_three_one    =	$_POST['correct_three_one'];     $ans_q31 = $_POST['ans_q31']; $ans_q31= str_replace("'", "\'",$ans_q31);
$three_two    =	$_POST['three_two'];     $correct_three_two    =	$_POST['correct_three_two'];     $ans_q32 = $_POST['ans_q32']; $ans_q32= str_replace("'", "\'",$ans_q32);
$three_three  =	$_POST['three_three'];   $correct_three_three	 =	$_POST['correct_three_three'];   $ans_q33	= $_POST['ans_q33']; $ans_q33= str_replace("'", "\'",$ans_q33);
$three_four	  =	$_POST['three_four'];    $correct_three_four	 =	$_POST['correct_three_four'];    $ans_q34	= $_POST['ans_q34']; $ans_q34= str_replace("'", "\'",$ans_q34);
$three_five	  =	$_POST['three_five'];    $correct_three_five	 =	$_POST['correct_three_five'];    $ans_q35	= $_POST['ans_q35']; $ans_q35= str_replace("'", "\'",$ans_q35);
$three_six	  =	$_POST['three_six'];     $correct_three_six	   =	$_POST['correct_three_six'];     $ans_q36	= $_POST['ans_q36']; $ans_q36= str_replace("'", "\'",$ans_q36);
$three_seven  =	$_POST['three_seven'];   $correct_three_seven  =	$_POST['correct_three_seven'];   $ans_q37	= $_POST['ans_q37']; $ans_q37= str_replace("'", "\'",$ans_q37);
$three_eight	=	$_POST['three_eight'];   $correct_three_eight	 =	$_POST['correct_three_eight'];   $ans_q38	= $_POST['ans_q38']; $ans_q38= str_replace("'", "\'",$ans_q38);
$three_nine	  =	$_POST['three_nine'];    $correct_three_nine	 =	$_POST['correct_three_nine'];    $ans_q39	= $_POST['ans_q39']; $ans_q39= str_replace("'", "\'",$ans_q39);
$fourty	      =	$_POST['fourty'];        $correct_fourty	     =	$_POST['correct_fourty'];        $ans_q40	= $_POST['ans_q40']; $ans_q40= str_replace("'", "\'",$ans_q40);

		$remark_twenty_one   = ""; if($correct_twenty_one   != $ans_q21) { $remark_twenty_one   = 0; } else { $remark_twenty_one   = 1; }
		$remark_twenty_two   = ""; if($correct_twenty_two   != $ans_q22) { $remark_twenty_two   = 0; } else { $remark_twenty_two   = 1; }
		$remark_twenty_three = ""; if($correct_twenty_three != $ans_q23) { $remark_twenty_three = 0; } else { $remark_twenty_three = 1; }
		$remark_twenty_four  = ""; if($correct_twenty_four  != $ans_q24) { $remark_twenty_four  = 0; } else { $remark_twenty_four  = 1; }
		$remark_twenty_five  = ""; if($correct_twenty_five  != $ans_q25) { $remark_twenty_five  = 0; } else { $remark_twenty_five  = 1; }
		$remark_twenty_six   = ""; if($correct_twenty_six   != $ans_q26) { $remark_twenty_six   = 0; } else { $remark_twenty_six   = 1; }
		$remark_twenty_seven = ""; if($correct_twenty_seven != $ans_q27) { $remark_twenty_seven = 0; } else { $remark_twenty_seven = 1; }
		$remark_twenty_eight = ""; if($correct_twenty_eight != $ans_q28) { $remark_twenty_eight = 0; } else { $remark_twenty_eight = 1; }
		$remark_twenty_nine  = ""; if($correct_twenty_nine  != $ans_q29) { $remark_twenty_nine  = 0; } else { $remark_twenty_nine  = 1; }
		$remark_thirty       = ""; if($correct_thirty       != $ans_q30) { $remark_thirty       = 0; } else { $remark_thirty       = 1; }
		$remark_three_one    = ""; if($correct_three_one    != $ans_q31) { $remark_three_one    = 0; } else { $remark_three_one    = 1; }
		$remark_three_two    = ""; if($correct_three_two    != $ans_q32) { $remark_three_two    = 0; } else { $remark_three_two    = 1; }
		$remark_three_three  = ""; if($correct_three_three  != $ans_q33) { $remark_three_three  = 0; } else { $remark_three_three  = 1; }
		$remark_three_four   = ""; if($correct_three_four   != $ans_q34) { $remark_three_four   = 0; } else { $remark_three_four   = 1; }
		$remark_three_five   = ""; if($correct_three_five   != $ans_q35) { $remark_three_five   = 0; } else { $remark_three_five   = 1; }
		$remark_three_six    = ""; if($correct_three_six    != $ans_q36) { $remark_three_six    = 0; } else { $remark_three_six    = 1; }
		$remark_three_seven  = ""; if($correct_three_seven  != $ans_q37) { $remark_three_seven  = 0; } else { $remark_three_seven  = 1; }
		$remark_three_eight  = ""; if($correct_three_eight  != $ans_q38) { $remark_three_eight  = 0; } else { $remark_three_eight  = 1; }
		$remark_three_nine   = ""; if($correct_three_nine   != $ans_q39) { $remark_three_nine   = 0; } else { $remark_three_nine   = 1; }
		$remark_fourty       = ""; if($correct_fourty       != $ans_q40) { $remark_fourty       = 0; } else { $remark_fourty       = 1; }


		// FILIPINO 
		$four_one   = $_POST['four_one'];    $correct_four_one  	 =	$_POST['correct_four_one'];     $ans_q41  = $_POST['ans_q41']; $ans_q41= str_replace("'", "\'",$ans_q41);
		$four_two   = $_POST['four_two'];    $correct_four_two	   =	$_POST['correct_four_two'];     $ans_q42  = $_POST['ans_q42']; $ans_q42= str_replace("'", "\'",$ans_q42);
		$four_three = $_POST['four_three'];  $correct_four_three   =	$_POST['correct_four_three'];   $ans_q43  = $_POST['ans_q43']; $ans_q43= str_replace("'", "\'",$ans_q43);
		$four_four	= $_POST['four_four'];   $correct_four_four	   =	$_POST['correct_four_four'];    $ans_q44	= $_POST['ans_q44']; $ans_q44= str_replace("'", "\'",$ans_q44);
		$four_five  = $_POST['four_five'];   $correct_four_five    =	$_POST['correct_four_five'];    $ans_q45	= $_POST['ans_q45']; $ans_q45= str_replace("'", "\'",$ans_q45);
		$four_six	  = $_POST['four_six'];    $correct_four_six	   =	$_POST['correct_four_six'];     $ans_q46  = $_POST['ans_q46']; $ans_q46= str_replace("'", "\'",$ans_q46);
		$four_seven = $_POST['four_seven'];  $correct_four_seven   =	$_POST['correct_four_seven'];   $ans_q47	= $_POST['ans_q47']; $ans_q47= str_replace("'", "\'",$ans_q47);
		$four_eight = $_POST['four_eight'];  $correct_four_eight   =	$_POST['correct_four_eight'];   $ans_q48	= $_POST['ans_q48']; $ans_q48= str_replace("'", "\'",$ans_q48);
		$four_nine  = $_POST['four_nine'];   $correct_four_nine	   =	$_POST['correct_four_nine'];    $ans_q49  = $_POST['ans_q49']; $ans_q49= str_replace("'", "\'",$ans_q49);
		$fifty	    = $_POST['fifty'];       $correct_fifty	       =	$_POST['correct_fifty'];        $ans_q50  = $_POST['ans_q50']; $ans_q50= str_replace("'", "\'",$ans_q50);
		$five_one   =	$_POST['five_one'];    $correct_five_one     =	$_POST['correct_five_one'];     $ans_q51  = $_POST['ans_q51']; $ans_q51= str_replace("'", "\'",$ans_q51);
		$five_two   =	$_POST['five_two'];    $correct_five_two     =	$_POST['correct_five_two'];     $ans_q52  = $_POST['ans_q52']; $ans_q52= str_replace("'", "\'",$ans_q52);
		$five_three =	$_POST['five_three'];  $correct_five_three	 =	$_POST['correct_five_three'];   $ans_q53	=	$_POST['ans_q53']; $ans_q53= str_replace("'", "\'",$ans_q53);
		$five_four	=	$_POST['five_four'];   $correct_five_four	   =	$_POST['correct_five_four'];    $ans_q54	=	$_POST['ans_q54']; $ans_q54= str_replace("'", "\'",$ans_q54);
		$five_five	=	$_POST['five_five'];   $correct_five_five	   =	$_POST['correct_five_five'];    $ans_q55	=	$_POST['ans_q55']; $ans_q55= str_replace("'", "\'",$ans_q55);
		$five_six	  =	$_POST['five_six'];    $correct_five_six	   =	$_POST['correct_five_six'];     $ans_q56	=	$_POST['ans_q56']; $ans_q56= str_replace("'", "\'",$ans_q56);
		$five_seven =	$_POST['five_seven'];  $correct_five_seven   =	$_POST['correct_five_seven'];   $ans_q57	=	$_POST['ans_q57']; $ans_q57= str_replace("'", "\'",$ans_q57);
		$five_eight	=	$_POST['five_eight'];  $correct_five_eight	 =	$_POST['correct_five_eight'];   $ans_q58	=	$_POST['ans_q58']; $ans_q58= str_replace("'", "\'",$ans_q58);
		$five_nine	=	$_POST['five_nine'];   $correct_five_nine	   =	$_POST['correct_five_nine'];    $ans_q59	=	$_POST['ans_q59']; $ans_q59= str_replace("'", "\'",$ans_q59);
		$sixty	    =	$_POST['sixty'];       $correct_sixty	       =	$_POST['correct_sixty'];        $ans_q60	=	$_POST['ans_q60']; $ans_q60= str_replace("'", "\'",$ans_q60);

		$remark_four_one   = ""; if($correct_four_one   != $ans_q41) { $remark_four_one   = 0; } else { $remark_four_one   = 1; }
		$remark_four_two   = ""; if($correct_four_two   != $ans_q42) { $remark_four_two   = 0; } else { $remark_four_two   = 1; }
		$remark_four_three = ""; if($correct_four_three != $ans_q43) { $remark_four_three = 0; } else { $remark_four_three = 1; }
		$remark_four_four  = ""; if($correct_four_four  != $ans_q44) { $remark_four_four  = 0; } else { $remark_four_four  = 1; }
		$remark_four_five  = ""; if($correct_four_five  != $ans_q45) { $remark_four_five  = 0; } else { $remark_four_five  = 1; }
		$remark_four_six   = ""; if($correct_four_six   != $ans_q46) { $remark_four_six   = 0; } else { $remark_four_six   = 1; }
		$remark_four_seven = ""; if($correct_four_seven != $ans_q47) { $remark_four_seven = 0; } else { $remark_four_seven = 1; }
		$remark_four_eight = ""; if($correct_four_eight != $ans_q48) { $remark_four_eight = 0; } else { $remark_four_eight = 1; }
		$remark_four_nine  = ""; if($correct_four_nine  != $ans_q49) { $remark_four_nine  = 0; } else { $remark_four_nine  = 1; }
		$remark_fifty      = ""; if($correct_fifty      != $ans_q50) { $remark_fifty      = 0; } else { $remark_fifty      = 1; }
		$remark_five_one   = ""; if($correct_five_one   != $ans_q51) { $remark_five_one   = 0; } else { $remark_five_one   = 1; }
		$remark_five_two   = ""; if($correct_five_two   != $ans_q52) { $remark_five_two   = 0; } else { $remark_five_two   = 1; }
		$remark_five_three = ""; if($correct_five_three != $ans_q53) { $remark_five_three = 0; } else { $remark_five_three = 1; }
		$remark_five_four  = ""; if($correct_five_four  != $ans_q54) { $remark_five_four  = 0; } else { $remark_five_four  = 1; }
		$remark_five_five  = ""; if($correct_five_five  != $ans_q55) { $remark_five_five  = 0; } else { $remark_five_five  = 1; }
		$remark_five_six   = ""; if($correct_five_six   != $ans_q56) { $remark_five_six   = 0; } else { $remark_five_six   = 1; }
		$remark_five_seven = ""; if($correct_five_seven != $ans_q57) { $remark_five_seven = 0; } else { $remark_five_seven = 1; }
		$remark_five_eight = ""; if($correct_five_eight != $ans_q58) { $remark_five_eight = 0; } else { $remark_five_eight = 1; }
		$remark_five_nine  = ""; if($correct_five_nine  != $ans_q59) { $remark_five_nine  = 0; } else { $remark_five_nine  = 1; }
		$remark_sixty      = ""; if($correct_sixty      != $ans_q60) { $remark_sixty      = 0; } else { $remark_sixty      = 1; }


		// SCIENCE
		$six_one     = $_POST['six_one'];      $correct_six_one	    =	$_POST['correct_six_one'];     $ans_q61 = $_POST['ans_q61']; $ans_q61= str_replace("'", "\'",$ans_q61);
		$six_two     = $_POST['six_two'];      $correct_six_two     =	$_POST['correct_six_two'];     $ans_q62 = $_POST['ans_q62']; $ans_q62= str_replace("'", "\'",$ans_q62);
		$six_three   = $_POST['six_three'];    $correct_six_three   =	$_POST['correct_six_three'];   $ans_q63 = $_POST['ans_q63']; $ans_q63= str_replace("'", "\'",$ans_q63);
		$six_four    = $_POST['six_four'];     $correct_six_four    =	$_POST['correct_six_four'];    $ans_q64	= $_POST['ans_q64']; $ans_q64= str_replace("'", "\'",$ans_q64);
		$six_five    = $_POST['six_five'];     $correct_six_five    =	$_POST['correct_six_five'];    $ans_q65	= $_POST['ans_q65']; $ans_q65= str_replace("'", "\'",$ans_q65);
		$six_six     = $_POST['six_six'];      $correct_six_six     =	$_POST['correct_six_six'];     $ans_q66 = $_POST['ans_q66']; $ans_q66= str_replace("'", "\'",$ans_q66);
		$six_seven   = $_POST['six_seven'];    $correct_six_seven   =	$_POST['correct_six_seven'];   $ans_q67	= $_POST['ans_q67']; $ans_q67= str_replace("'", "\'",$ans_q67);
		$six_eight   = $_POST['six_eight'];    $correct_six_eight   =	$_POST['correct_six_eight'];   $ans_q68	= $_POST['ans_q68']; $ans_q68= str_replace("'", "\'",$ans_q68);
		$six_nine    = $_POST['six_nine'];     $correct_six_nine    =	$_POST['correct_six_nine'];    $ans_q69 = $_POST['ans_q69']; $ans_q69= str_replace("'", "\'",$ans_q69);
		$seventy     = $_POST['seventy'];      $correct_seventy     =	$_POST['correct_seventy'];     $ans_q70 = $_POST['ans_q70']; $ans_q70= str_replace("'", "\'",$ans_q70);
		$seven_one   = $_POST['seven_one'];    $correct_seven_one   =	$_POST['correct_seven_one'];   $ans_q71 = $_POST['ans_q71']; $ans_q71= str_replace("'", "\'",$ans_q71);
		$seven_two   = $_POST['seven_two'];    $correct_seven_two   =	$_POST['correct_seven_two'];   $ans_q72 = $_POST['ans_q72']; $ans_q72= str_replace("'", "\'",$ans_q72);
		$seven_three = $_POST['seven_three'];  $correct_seven_three	=	$_POST['correct_seven_three']; $ans_q73	=	$_POST['ans_q73']; $ans_q73= str_replace("'", "\'",$ans_q73);
		$seven_four  = $_POST['seven_four'];   $correct_seven_four  =	$_POST['correct_seven_four'];  $ans_q74	=	$_POST['ans_q74']; $ans_q74= str_replace("'", "\'",$ans_q74);
		$seven_five  = $_POST['seven_five'];   $correct_seven_five  =	$_POST['correct_seven_five'];  $ans_q75	=	$_POST['ans_q75']; $ans_q75= str_replace("'", "\'",$ans_q75);
		$seven_six   = $_POST['seven_six'];    $correct_seven_six   =	$_POST['correct_seven_six'];   $ans_q76	=	$_POST['ans_q76']; $ans_q76= str_replace("'", "\'",$ans_q76);
		$seven_seven = $_POST['seven_seven'];  $correct_seven_seven =	$_POST['correct_seven_seven']; $ans_q77	=	$_POST['ans_q77']; $ans_q77= str_replace("'", "\'",$ans_q77);
		$seven_eight = $_POST['seven_eight'];  $correct_seven_eight	=	$_POST['correct_seven_eight']; $ans_q78	=	$_POST['ans_q78']; $ans_q78= str_replace("'", "\'",$ans_q78);
		$seven_nine  = $_POST['seven_nine'];   $correct_seven_nine  =	$_POST['correct_seven_nine'];  $ans_q79	=	$_POST['ans_q79']; $ans_q79= str_replace("'", "\'",$ans_q79);
		$eighty      = $_POST['eighty'];       $correct_eighty      =	$_POST['correct_eighty'];      $ans_q80	=	$_POST['ans_q80']; $ans_q80= str_replace("'", "\'",$ans_q80);

		$remark_six_one     = ""; if($correct_six_one	    != $ans_q61) { $remark_six_one     = 0; } else { $remark_six_one      = 1; }
		$remark_six_two     = ""; if($correct_six_two     != $ans_q62) { $remark_six_two     = 0; } else { $remark_six_two      = 1; }
		$remark_six_three   = ""; if($correct_six_three   != $ans_q63) { $remark_six_three   = 0; } else { $remark_six_three    = 1; }
		$remark_six_four    = ""; if($correct_six_four    != $ans_q64) { $remark_six_four    = 0; } else { $remark_six_four     = 1; }
		$remark_six_five    = ""; if($correct_six_five    != $ans_q65) { $remark_six_five    = 0; } else { $remark_six_five     = 1; }
		$remark_six_six     = ""; if($correct_six_six     != $ans_q66) { $remark_six_six     = 0; } else { $remark_six_six      = 1; }
		$remark_six_seven   = ""; if($correct_six_seven   != $ans_q67) { $remark_six_seven   = 0; } else { $remark_six_seven    = 1; }
		$remark_six_eight   = ""; if($correct_six_eight   != $ans_q68) { $remark_six_eight   = 0; } else { $remark_six_eight    = 1; }
		$remark_six_nine    = ""; if($correct_six_nine    != $ans_q69) { $remark_six_nine    = 0; } else { $remark_six_nine     = 1; }
		$remark_seventy     = ""; if($correct_seventy     != $ans_q70) { $remark_seventy     = 0; } else { $remark_seventy      = 1; }
		$remark_seven_one   = ""; if($correct_seven_one   != $ans_q71) { $remark_seven_one   = 0; } else { $remark_seven_one    = 1; }
		$remark_seven_two   = ""; if($correct_seven_two   != $ans_q72) { $remark_seven_two   = 0; } else { $remark_seven_two    = 1; }
		$remark_seven_three = ""; if($correct_seven_three != $ans_q73) { $remark_seven_three = 0; } else { $remark_seven_three  = 1; }
		$remark_seven_four  = ""; if($correct_seven_four  != $ans_q74) { $remark_seven_four  = 0; } else { $remark_seven_four   = 1; }
		$remark_seven_five  = ""; if($correct_seven_five  != $ans_q75) { $remark_seven_five  = 0; } else { $remark_seven_five   = 1; }
		$remark_seven_six   = ""; if($correct_seven_six   != $ans_q76) { $remark_seven_six   = 0; } else { $remark_seven_six    = 1; }
		$remark_seven_seven = ""; if($correct_seven_seven != $ans_q77) { $remark_seven_seven = 0; } else { $remark_seven_seven  = 1; }
		$remark_seven_eight = ""; if($correct_seven_eight != $ans_q78) { $remark_seven_eight = 0; } else { $remark_seven_eight  = 1; }
		$remark_seven_nine  = ""; if($correct_seven_nine  != $ans_q79) { $remark_seven_nine  = 0; } else { $remark_seven_nine   = 1; }
		$remark_eighty      = ""; if($correct_eighty      != $ans_q80) { $remark_eighty      = 0; } else { $remark_eighty       = 1; }


		// HISTORY
		$eight_one   = $_POST['eight_one'];   $correct_eight_one   =	$_POST['correct_eight_one'];    $ans_q81  = $_POST['ans_q81'];  $ans_q81= str_replace("'", "\'",$ans_q81);
		$eight_two   = $_POST['eight_two'];   $correct_eight_two   =	$_POST['correct_eight_two'];    $ans_q82  = $_POST['ans_q82'];  $ans_q82= str_replace("'", "\'",$ans_q82);
		$eight_three = $_POST['eight_three']; $correct_eight_three =	$_POST['correct_eight_three'];  $ans_q83  = $_POST['ans_q83'];  $ans_q83= str_replace("'", "\'",$ans_q83);
		$eight_four  = $_POST['eight_four'];  $correct_eight_four  =	$_POST['correct_eight_four'];   $ans_q84	= $_POST['ans_q84'];  $ans_q84= str_replace("'", "\'",$ans_q84);
		$eight_five  = $_POST['eight_five'];  $correct_eight_five  =	$_POST['correct_eight_five'];   $ans_q85	= $_POST['ans_q85'];  $ans_q85= str_replace("'", "\'",$ans_q85);
		$eight_six   = $_POST['eight_six'];   $correct_eight_six   =	$_POST['correct_eight_six'];    $ans_q86  = $_POST['ans_q86'];  $ans_q86= str_replace("'", "\'",$ans_q86);
		$eight_seven = $_POST['eight_seven']; $correct_eight_seven =	$_POST['correct_eight_seven'];  $ans_q87	= $_POST['ans_q87'];  $ans_q87= str_replace("'", "\'",$ans_q87);
		$eight_eight = $_POST['eight_eight']; $correct_eight_eight =	$_POST['correct_eight_eight'];  $ans_q88	= $_POST['ans_q88'];  $ans_q88= str_replace("'", "\'",$ans_q88);
		$eight_nine  = $_POST['eight_nine'];  $correct_eight_nine  =	$_POST['correct_eight_nine'];   $ans_q89  = $_POST['ans_q89'];  $ans_q89= str_replace("'", "\'",$ans_q89);
		$ninety      = $_POST['ninety'];      $correct_ninety      =	$_POST['correct_ninety'];       $ans_q90  = $_POST['ans_q90'];  $ans_q90= str_replace("'", "\'",$ans_q90);
		$nine_one    = $_POST['nine_one'];    $correct_nine_one    =	$_POST['correct_nine_one'];     $ans_q91  = $_POST['ans_q91'];  $ans_q91= str_replace("'", "\'",$ans_q91);
		$nine_two    = $_POST['nine_two'];    $correct_nine_two    =	$_POST['correct_nine_two'];     $ans_q92  = $_POST['ans_q92'];  $ans_q92= str_replace("'", "\'",$ans_q92);
		$nine_three  = $_POST['nine_three'];  $correct_nine_three	 =	$_POST['correct_nine_three'];   $ans_q93	=	$_POST['ans_q93'];  $ans_q93= str_replace("'", "\'",$ans_q93);
		$nine_four   = $_POST['nine_four'];   $correct_nine_four   =	$_POST['correct_nine_four'];    $ans_q94	=	$_POST['ans_q94'];  $ans_q94= str_replace("'", "\'",$ans_q94);
		$nine_five   = $_POST['nine_five'];   $correct_nine_five   =	$_POST['correct_nine_five'];    $ans_q95	=	$_POST['ans_q95'];  $ans_q95= str_replace("'", "\'",$ans_q95);
		$nine_six    = $_POST['nine_six'];    $correct_nine_six    =	$_POST['correct_nine_six'];     $ans_q96	=	$_POST['ans_q96'];  $ans_q96= str_replace("'", "\'",$ans_q96);
		$nine_seven  = $_POST['nine_seven'];  $correct_nine_seven  =	$_POST['correct_nine_seven'];   $ans_q97	=	$_POST['ans_q97'];  $ans_q97= str_replace("'", "\'",$ans_q97);
		$nine_eight  = $_POST['nine_eight'];  $correct_nine_eight	 =	$_POST['correct_nine_eight'];   $ans_q98	=	$_POST['ans_q98'];  $ans_q98= str_replace("'", "\'",$ans_q98);
		$nine_nine   = $_POST['nine_nine'];   $correct_nine_nine   =	$_POST['correct_nine_nine'];    $ans_q99	=	$_POST['ans_q99'];  $ans_q99= str_replace("'", "\'",$ans_q99);
		$hundred     = $_POST['hundred'];     $correct_hundred     =	$_POST['correct_hundred'];      $ans_q100	=	$_POST['ans_q100']; $ans_q100= str_replace("'", "\'",$ans_q100);

		$remark_eight_one    = ""; if($correct_eight_one   != $ans_q81 ) { $remark_eight_one   = 0; } else { $remark_eight_one   = 1; }
		$remark_eight_two    = ""; if($correct_eight_two   != $ans_q82 ) { $remark_eight_two   = 0; } else { $remark_eight_two   = 1; }
		$remark_eight_three  = ""; if($correct_eight_three != $ans_q83 ) { $remark_eight_three = 0; } else { $remark_eight_three = 1; }
		$remark_eight_four   = ""; if($correct_eight_four  != $ans_q84 ) { $remark_eight_four  = 0; } else { $remark_eight_four  = 1; }
		$remark_eight_five   = ""; if($correct_eight_five  != $ans_q85 ) { $remark_eight_five  = 0; } else { $remark_eight_five  = 1; }
		$remark_eight_six    = ""; if($correct_eight_six   != $ans_q86 ) { $remark_eight_six   = 0; } else { $remark_eight_six   = 1; }
		$remark_eight_seven  = ""; if($correct_eight_seven != $ans_q87 ) { $remark_eight_seven = 0; } else { $remark_eight_seven = 1; }
		$remark_eight_eight  = ""; if($correct_eight_eight != $ans_q88 ) { $remark_eight_eight = 0; } else { $remark_eight_eight = 1; }
		$remark_eight_nine   = ""; if($correct_eight_nine  != $ans_q89 ) { $remark_eight_nine  = 0; } else { $remark_eight_nine  = 1; }
		$remark_ninety       = ""; if($correct_ninety      != $ans_q90 ) { $remark_ninety      = 0; } else { $remark_ninety      = 1; }
		$remark_nine_one     = ""; if($correct_nine_one    != $ans_q91 ) { $remark_nine_one    = 0; } else { $remark_nine_one    = 1; }
		$remark_nine_two     = ""; if($correct_nine_two    != $ans_q92 ) { $remark_nine_two    = 0; } else { $remark_nine_two    = 1; }
		$remark_nine_three   = ""; if($correct_nine_three	 != $ans_q93 ) { $remark_nine_three  = 0; } else { $remark_nine_three  = 1; }
		$remark_nine_four    = ""; if($correct_nine_four   != $ans_q94 ) { $remark_nine_four   = 0; } else { $remark_nine_four   = 1; }
		$remark_nine_five    = ""; if($correct_nine_five   != $ans_q95 ) { $remark_nine_five   = 0; } else { $remark_nine_five   = 1; }
		$remark_nine_six     = ""; if($correct_nine_six    != $ans_q96 ) { $remark_nine_six    = 0; } else { $remark_nine_six    = 1; }
		$remark_nine_seven   = ""; if($correct_nine_seven  != $ans_q97 ) { $remark_nine_seven  = 0; } else { $remark_nine_seven  = 1; }
		$remark_nine_eight   = ""; if($correct_nine_eight	 != $ans_q98 ) { $remark_nine_eight  = 0; } else { $remark_nine_eight  = 1; }
		$remark_nine_nine    = ""; if($correct_nine_nine   != $ans_q99 ) { $remark_nine_nine   = 0; } else { $remark_nine_nine   = 1; }
		$remark_hundred      = ""; if($correct_hundred     != $ans_q100) { $remark_hundred     = 0; } else { $remark_hundred     = 1; }


		$exists = mysqli_query($conn, "SELECT * FROM exam WHERE user_Id='$user_Id' AND date_of_exam='$date_registered'");
		if(mysqli_num_rows($exists) > 0 ) {
			$_SESSION['message'] = "Your answers have been submitted.";
      $_SESSION['text'] = "Success";
      $_SESSION['status'] = "success";
			header("Location: exam_result.php");
		} else {

		// ALL SCORE IN ENGLISH
		$english = $remark_one       + $remark_two       + $remark_three     + $remark_four      + $remark_five      + $remark_six       + $remark_seven     + $remark_eight     + $remark_nine      + $remark_ten       + $remark_eleven    + $remark_twelve    + $remark_thirteen  + $remark_fourteen  + $remark_fifteen   + $remark_sixteen   + $remark_seventeen + $remark_eighteen  + $remark_nineteen  + $remark_twenty  ;  

		// ALL SCORE I MATH
		$math = $remark_twenty_one   + $remark_twenty_two   + $remark_twenty_three + $remark_twenty_four  + $remark_twenty_five  + $remark_twenty_six   + $remark_twenty_seven + $remark_twenty_eight + $remark_twenty_nine  + $remark_thirty       + $remark_three_one    + $remark_three_two    + $remark_three_three  + $remark_three_four   + $remark_three_five   + $remark_three_six    + $remark_three_seven  + $remark_three_eight  + $remark_three_nine   + $remark_fourty; 

		// ALL SCORE IN FILIPINO
		$filipino = $remark_four_one  + $remark_four_two  + $remark_four_three+ $remark_four_four + $remark_four_five + $remark_four_six  + $remark_four_seven+ $remark_four_eight+ $remark_four_nine + $remark_fifty     + $remark_five_one  + $remark_five_two  + $remark_five_three+ $remark_five_four + $remark_five_five + $remark_five_six  + $remark_five_seven+ $remark_five_eight+ $remark_five_nine + $remark_sixty; 
		// ALL SCORE IN SCIENCE
		$science = $remark_six_one     + $remark_six_two     + $remark_six_three   + $remark_six_four    + $remark_six_five    + $remark_six_six     + $remark_six_seven   + $remark_six_eight   + $remark_six_nine    + $remark_seventy     + $remark_seven_one   + $remark_seven_two   + $remark_seven_three + $remark_seven_four  + $remark_seven_five  + $remark_seven_six   + $remark_seven_seven + $remark_seven_eight + $remark_seven_nine  + $remark_eighty;

			// ALL SCORE IN HISTORY
		$history = $remark_eight_one    + $remark_eight_two    + $remark_eight_three  + $remark_eight_four   + $remark_eight_five   + $remark_eight_six    + $remark_eight_seven  + $remark_eight_eight  + $remark_eight_nine   + $remark_ninety       + $remark_nine_one     + $remark_nine_two     + $remark_nine_three   + $remark_nine_four    + $remark_nine_five    + $remark_nine_six     + $remark_nine_seven   + $remark_nine_eight   + $remark_nine_nine    + $remark_hundred;

	 // TOTAL
	 $total = $english + $math + $filipino + $science + $history;
	 // $total = $remark_one + $remark_two + $remark_three + $remark_four + $remark_five + $remark_six + $remark_seven + $remark_eight + $remark_nine + $remark_ten + $remark_eleven + $remark_twelve + $remark_thirteen + $remark_fourteen + $remark_fifteen   + $remark_sixteen   + $remark_seventeen + $remark_eighteen  + $remark_nineteen + $remark_twenty + $remark_twenty_one + $remark_twenty_two + $remark_twenty_three + $remark_twenty_four  + $remark_twenty_five  + $remark_twenty_six + $remark_twenty_seven + $remark_twenty_eight + $remark_twenty_nine  + $remark_thirty       + $remark_three_one    + $remark_three_two    + $remark_three_three + $remark_three_four + $remark_three_five + $remark_three_six + $remark_three_seven  + $remark_three_eight  + $remark_three_nine   + $remark_fourty + $remark_four_one + $remark_four_two + $remark_four_three + $remark_four_four  + $remark_four_five  + $remark_four_six   + $remark_four_seven + $remark_four_eight + $remark_four_nine + $remark_fifty  + $remark_five_one + $remark_five_two   + $remark_five_three + $remark_five_four  + $remark_five_five + $remark_five_six + $remark_five_seven + $remark_five_eight + $remark_five_nine + $remark_sixty + $remark_six_one     + $remark_six_two + $remark_six_three + $remark_six_four + $remark_six_five    + $remark_six_six + $remark_six_seven + $remark_six_eight + $remark_six_nine    + $remark_seventy + $remark_seven_one + $remark_seven_two   + $remark_seven_three + $remark_seven_four + $remark_seven_five + $remark_seven_six   + $remark_seven_seven + $remark_seven_eight + $remark_seven_nine  + $remark_eighty      + $remark_eight_one + $remark_eight_two + $remark_eight_three  + $remark_eight_four + $remark_eight_five + $remark_eight_six    + $remark_eight_seven  + $remark_eight_eight + $remark_eight_nine + $remark_ninety       + $remark_nine_one + $remark_nine_two + $remark_nine_three   + $remark_nine_four    + $remark_nine_five  + $remark_nine_six + $remark_nine_seven   + $remark_nine_eight + $remark_nine_nine + $remark_hundred;

			$save = mysqli_query($conn, "INSERT INTO exam (user_Id, q1, q1_remarks, q2, q2_remarks,  q3, q3_remarks,  q4, q4_remarks, q5, q5_remarks, q6, q6_remarks,  q7, q7_remarks,  q8, q8_remarks,  q9, q9_remarks, q10, q10_remarks, q11, q11_remarks,  q12, q12_remarks,  q13, q13_remarks,  q14, q14_remarks, q15, q15_remarks, q16, q16_remarks,  q17, q17_remarks,  q18, q18_remarks,  q19, q19_remarks, q20, q20_remarks, q21, q21_remarks,  q22, q22_remarks,  q23, q23_remarks,  q24, q24_remarks, q25, q25_remarks, q26, q26_remarks,  q27, q27_remarks,  q28, q28_remarks, q29, q29_remarks, q30, q30_remarks,  q31, q31_remarks,  q32, q32_remarks,  q33, q33_remarks, q34, q34_remarks, q35, q35_remarks,  q36, q36_remarks,  q37, q37_remarks,  q38, q38_remarks, q39, q39_remarks, q40, q40_remarks,  q41, q41_remarks,  q42, q42_remarks,  q43, q43_remarks, q44, q44_remarks, q45, q45_remarks,  q46, q46_remarks,  q47, q47_remarks,  q48, q48_remarks, q49, q49_remarks, q50, q50_remarks,  q51, q51_remarks,  q52, q52_remarks,  q53, q53_remarks, q54, q54_remarks, q55, q55_remarks,  q56, q56_remarks,  q57, q57_remarks,  q58, q58_remarks, q59, q59_remarks, q60, q60_remarks,  q61, q61_remarks,  q62, q62_remarks,  q63, q63_remarks, q64, q64_remarks, q65, q65_remarks,  q66, q66_remarks,  q67, q67_remarks,  q68, q68_remarks, q69, q69_remarks, q70, q70_remarks,  q71, q71_remarks,  q72, q72_remarks,  q73, q73_remarks, q74, q74_remarks, q75, q75_remarks,  q76, q76_remarks,  q77, q77_remarks,  q78, q78_remarks, q79, q79_remarks, q80, q80_remarks,  q81, q81_remarks,  q82, q82_remarks,  q83, q83_remarks, q84, q84_remarks, q85, q85_remarks,  q86, q86_remarks,  q87, q87_remarks,  q88, q88_remarks, q89, q89_remarks, q90, q90_remarks,  q91, q91_remarks,  q92, q92_remarks,  q93, q93_remarks, q94, q94_remarks, q95, q95_remarks,  q96, q96_remarks,  q97, q97_remarks,  q98, q98_remarks, q99, q99_remarks, q100, q100_remarks, total, english, math, filipino, science, history, date_of_exam) 
			
			VALUES (
			'$user_Id',
			'$one', '$remark_one', 
			'$two', '$remark_two', 
			'$three', '$remark_three', 
			'$four',	'$remark_four', 
			'$five', '$remark_five', 
			'$six', '$remark_six', 
			'$seven', '$remark_seven', 
			'$eight', '$remark_eight', 
			'$nine', '$remark_nine', 
			'$ten', '$remark_ten', 
			'$eleven', '$remark_eleven', 
			'$twelve', '$remark_twelve', 
			'$thirteen', '$remark_thirteen', 
			'$fourteen',	'$remark_fourteen', 
			'$fifteen',	'$remark_fifteen', 
			'$sixteen', '$remark_sixteen', 
			'$seventeen', '$remark_seventeen', 
			'$eighteen',	'$remark_eighteen', 
			'$nineteen', '$remark_nineteen', 
			'$twenty',	'$remark_twenty', 
			'$twenty_one', '$remark_twenty_one', 
			'$twenty_two', '$remark_twenty_two', 
			'$twenty_three', '$remark_twenty_three', 
			'$twenty_four', '$remark_twenty_four', 
			'$twenty_five', '$remark_twenty_five', 
			'$twenty_six', '$remark_twenty_six', 
			'$twenty_seven', '$remark_twenty_seven', 
			'$twenty_eight', '$remark_twenty_eight', 
			'$twenty_nine', '$remark_twenty_nine', 
			'$thirty', '$remark_thirty', 
			'$three_one', '$remark_three_one', 
			'$three_two', '$remark_three_two', 
			'$three_three', '$remark_three_three', 
			'$three_four', '$remark_three_four', 
			'$three_five', '$remark_three_five', 
			'$three_six', '$remark_three_six', 
			'$three_seven', '$remark_three_seven', 
			'$three_eight', '$remark_three_eight', 
			'$three_nine', '$remark_three_nine', 
			'$fourty', '$remark_fourty', 
			'$four_one', '$remark_four_one', 
			'$four_two', '$remark_four_two', 
			'$four_three', '$remark_four_three', 
			'$four_four',	'$remark_four_four', 
			'$four_five', '$remark_four_five', 
			'$four_six', '$remark_four_six', 
			'$four_seven', '$remark_four_seven', 
			'$four_eight', '$remark_four_eight', 
			'$four_nine', '$remark_four_nine', 
			'$fifty',	'$remark_fifty', 
			'$five_one', '$remark_five_one', 
			'$five_two', '$remark_five_two', 
			'$five_three', '$remark_five_three', 
			'$five_four',	'$remark_five_four', 
			'$five_five', '$remark_five_five', 
			'$five_six', '$remark_five_six', 
			'$five_seven', '$remark_five_seven', 
			'$five_eight', '$remark_five_eight', 
			'$five_nine', '$remark_five_nine', 
			'$sixty',	'$remark_sixty', 
			'$six_one', '$remark_six_one',  
			'$six_two', '$remark_six_two', 
			'$six_three', '$remark_six_three', 
			'$six_four',  '$remark_six_four', 
			'$six_five', '$remark_six_five', 
			'$six_six', '$remark_six_six', 
			'$six_seven', '$remark_six_seven', 
			'$six_eight', '$remark_six_eight', 
			'$six_nine', '$remark_six_nine', 
			'$seventy', '$remark_seventy', 
			'$seven_one', '$remark_seven_one', 
			'$seven_two', '$remark_seven_two', 
			'$seven_three', '$remark_seven_three', 
			'$seven_four', '$remark_seven_four', 
			'$seven_five', '$remark_seven_five', 
			'$seven_six', '$remark_seven_six', 
			'$seven_seven', '$remark_seven_seven', 
			'$seven_eight', '$remark_seven_eight', 
			'$seven_nine', '$remark_seven_nine', 
			'$eighty', '$remark_eighty', 
			'$eight_one', '$remark_eight_one', 
			'$eight_two', '$remark_eight_two', 
			'$eight_three', '$remark_eight_three', 
			'$eight_four', '$remark_eight_four', 
			'$eight_five', '$remark_eight_five', 
			'$eight_six', '$remark_eight_six', 
			'$eight_seven', '$remark_eight_seven', 
			'$eight_eight', '$remark_eight_eight', 
			'$eight_nine', '$remark_eight_nine', 
			'$ninety', '$remark_ninety', 
			'$nine_one', '$remark_nine_one', 
			'$nine_two', '$remark_nine_two', 
			'$nine_three', '$remark_nine_three', 
			'$nine_four', '$remark_nine_four', 
			'$nine_five', '$remark_nine_five', 
			'$nine_six', '$remark_nine_six', 
			'$nine_seven', '$remark_nine_seven', 
			'$nine_eight', '$remark_nine_eight', 
			'$nine_nine', '$remark_nine_nine', 
			'$hundred', '$remark_hundred',
			'$total', 
			'$english', '$math', '$filipino', '$science', '$history',
			'$date_registered')"	
			);

			if($save) {

				$save2 = mysqli_query($conn, "INSERT INTO user_answers (user_Id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, q6_answer, q7_answer, q8_answer, q9_answer, q10_answer, q11_answer, q12_answer, q13_answer, q14_answer, q15_answer, q16_answer, q17_answer, q18_answer, q19_answer, q20_answer, q21_answer, q22_answer, q23_answer, q24_answer, q25_answer, q26_answer, q27_answer, q28_answer, q29_answer, q30_answer, q31_answer, q32_answer, q33_answer, q34_answer, q35_answer, q36_answer, q37_answer, q38_answer, q39_answer,  q40_answer, q41_answer, q42_answer, q43_answer, q44_answer, q45_answer, q46_answer, q47_answer, q48_answer, q49_answer, q50_answer, q51_answer, q52_answer, q53_answer, q54_answer, q55_answer, q56_answer, q57_answer, q58_answer, q59_answer, q60_answer, q61_answer, q62_answer, q63_answer,  q64_answer, q65_answer, q66_answer, q67_answer, q68_answer, q69_answer, q70_answer, q71_answer, q72_answer, q73_answer, q74_answer, q75_answer, q76_answer, q77_answer, q78_answer, q79_answer, q80_answer, q81_answer, q82_answer, q83_answer, q84_answer, q85_answer, q86_answer, q87_answer, q88_answer,q89_answer, q90_answer, q91_answer, q92_answer, q93_answer, q94_answer, q95_answer, q96_answer, q97_answer, q98_answer, q99_answer, q100_answer, date_of_exam ) VALUES ('$user_Id', '$ans_q1',   '$ans_q2',   '$ans_q3',  '$ans_q4',	'$ans_q5',	'$ans_q6',  '$ans_q7',	'$ans_q8',	'$ans_q9',  '$ans_q10', '$ans_q11',  '$ans_q12',  '$ans_q13',	'$ans_q14',	'$ans_q15',	'$ans_q16',	'$ans_q17',	'$ans_q18',	'$ans_q19',	'$ans_q20',	'$ans_q21',  '$ans_q22',  '$ans_q23', '$ans_q24',	'$ans_q25',	'$ans_q26', '$ans_q27',	'$ans_q28',	'$ans_q29', '$ans_q30', '$ans_q31',  '$ans_q32',  '$ans_q33',	'$ans_q34',	'$ans_q35',	'$ans_q36',	'$ans_q37',	'$ans_q38',	'$ans_q39',	'$ans_q40',	'$ans_q41',  '$ans_q42',  '$ans_q43', '$ans_q44', '$ans_q45', '$ans_q46', '$ans_q47', '$ans_q48', '$ans_q49', '$ans_q50',  '$ans_q51',  '$ans_q52',  '$ans_q53',	'$ans_q54',	'$ans_q55',	'$ans_q56',	'$ans_q57',	'$ans_q58',	'$ans_q59',	'$ans_q60',	'$ans_q61',  '$ans_q62',  '$ans_q63', '$ans_q64',	'$ans_q65',	'$ans_q66', '$ans_q67',	'$ans_q68',	'$ans_q69', '$ans_q70', '$ans_q71',  '$ans_q72',  '$ans_q73',	'$ans_q74',	'$ans_q75',	'$ans_q76',	'$ans_q77',	'$ans_q78',	'$ans_q79',	'$ans_q80',	'$ans_q81',  '$ans_q82',  '$ans_q83', '$ans_q84',	'$ans_q85',	'$ans_q86', '$ans_q87',	'$ans_q88',	'$ans_q89', '$ans_q90',  '$ans_q91',  '$ans_q92',  '$ans_q93',	'$ans_q94',	'$ans_q95',	'$ans_q96',	'$ans_q97',	'$ans_q98',	'$ans_q99',	'$ans_q100', '$date_registered')");

					if($save2) {
		    	$_SESSION['message'] = "Submitted successfully.";
		      $_SESSION['text'] = "Submission success";
		      $_SESSION['status'] = "success";
					header("Location: exam_result.php");
			    } else {
			      $_SESSION['message'] = "Something went wrong while saving the information.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: exam.php");
			    }

	    } else {
	      $_SESSION['message'] = "Something went wrong while saving the information.";
	      $_SESSION['text'] = "Please try again.";
	      $_SESSION['status'] = "error";
				header("Location: exam.php");
	    }
  }

}


	


	// VERIFY PASSWORD SENT BY EMAIL DURING REGISTRATION BEFORE ACCESSING EXAMINATION FORMS
	
if(isset($_POST['verify_entered_Code'])) {
		$user_Id					= $_POST['user_Id'];
		$emailedPassword  = $_POST['emailedPassword'];
		$inputtedPassword = $_POST['inputtedPassword'];

		if($inputtedPassword != $emailedPassword) {
			$_SESSION['message'] = "Password is incorrect";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: exam_getCode.php");
		} else {
			$_SESSION['message'] = "You may now start your exam. Good luck!";
      $_SESSION['text'] = "Verification success";
      $_SESSION['status'] = "success";
			header('Location: exam.php?user_Id='.$user_Id.'');
		}
}

?>