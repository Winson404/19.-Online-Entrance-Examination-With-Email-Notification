<?php 
		include '../config.php';

	  use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require '../vendor/PHPMailer/src/Exception.php';
		require '../vendor/PHPMailer/src/PHPMailer.php';
		require '../vendor/PHPMailer/src/SMTP.php';

	// UPDATE USER
	if(isset($_POST['update_admin'])) {

		$user_Id    = $_POST['user_Id'];
		$firstname  = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname   = $_POST['lastname'];
		$suffix     = $_POST['suffix'];
		$gender     = $_POST['gender'];
		$dob        = $_POST['dob'];
		$age        = $_POST['age'];
		$contact    = $_POST['contact'];
		$email      = $_POST['email'];
		$address    = $_POST['address'];
		$file       = basename($_FILES["fileToUpload"]["name"]);

		if(empty($file)) {

					$save = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE user_Id='$user_Id'");
		            if($save) {
                	$_SESSION['message'] = "Admin information has been updated!";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: admin.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while updating the information.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                }

		} else {

				  // Check if image file is a actual image or fake image
		          $target_dir = "../images-users/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message']  = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	                      	$save = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact', image='$file' WHERE user_Id='$user_Id'");
							            if($save) {
					                	$_SESSION['message'] = "Admin information has been updated!";
								            $_SESSION['text'] = "Updated successfully!";
										        $_SESSION['status'] = "success";
														header("Location: admin.php");
					                } else {
					                  $_SESSION['message'] = "Something went wrong while updating the information.";
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






	// CHANGE USER PASSWORD
	if(isset($_POST['password_admin'])) {

    	$user_Id     = $_POST['user_Id'];
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: admin.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$password' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: admin.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: admin.php");
    	}

    }





	// UPDATE USER
	if(isset($_POST['update_user'])) {

		$user_Id                = mysqli_real_escape_string($conn, $_POST['user_Id']);
		$username							  = mysqli_real_escape_string($conn, $_POST['username']);
		$school_year            = mysqli_real_escape_string($conn, $_POST['school_year']);
		$semester               = mysqli_real_escape_string($conn, $_POST['semester']);
		$enrollmentStatus       = mysqli_real_escape_string($conn, $_POST['enrollmentStatus']);
		$firstname              = mysqli_real_escape_string($conn, $_POST['firstname']);
		$middlename             = mysqli_real_escape_string($conn, $_POST['middlename']);
		$lastname               = mysqli_real_escape_string($conn, $_POST['lastname']);
		$suffix                 = mysqli_real_escape_string($conn, $_POST['suffix']);
		$gender                 = mysqli_real_escape_string($conn, $_POST['gender']);
		$dob                    = mysqli_real_escape_string($conn, $_POST['dob']);
		$age                    = mysqli_real_escape_string($conn, $_POST['age']);
		$place_of_birth         = mysqli_real_escape_string($conn, $_POST['place_of_birth']);
		$address                = mysqli_real_escape_string($conn, $_POST['address']);
		$bh_Address             = mysqli_real_escape_string($conn, $_POST['bh_Address']);
		$landline               = mysqli_real_escape_string($conn, $_POST['landline']);
		$email                  = mysqli_real_escape_string($conn, $_POST['email']);
		if(empty($email)) { $email = 'NA'; }
		$contact                = mysqli_real_escape_string($conn, $_POST['contact']);
		$birth_order            = mysqli_real_escape_string($conn, $_POST['birth_order']);
		$civilstatus            = mysqli_real_escape_string($conn, $_POST['civilstatus']);
		$school                 = mysqli_real_escape_string($conn, $_POST['school']);
		$language               = mysqli_real_escape_string($conn, $_POST['language']);
		$religion               = mysqli_real_escape_string($conn, $_POST['religion']);
		$nationality            = mysqli_real_escape_string($conn, $_POST['nationality']);
		$spouseName             = mysqli_real_escape_string($conn, $_POST['spouseName']);
		$no_of_Children         = mysqli_real_escape_string($conn, $_POST['no_of_Children']);
		$F_Name                 = mysqli_real_escape_string($conn, $_POST['F_Name']);
		$F_Address              = mysqli_real_escape_string($conn, $_POST['F_Address']);
		$F_Landline             = mysqli_real_escape_string($conn, $_POST['F_Landline']);
		$F_Contact              = mysqli_real_escape_string($conn, $_POST['F_Contact']);
		$F_Education            = mysqli_real_escape_string($conn, $_POST['F_Education']);
		$F_Occupation           = mysqli_real_escape_string($conn, $_POST['F_Occupation']);
		$F_Annual_Income        = mysqli_real_escape_string($conn, $_POST['F_Annual_Income']);
		$F_Religion             = mysqli_real_escape_string($conn, $_POST['F_Religion']);
		$M_Name                 = mysqli_real_escape_string($conn, $_POST['M_Name']);
		$M_Address              = mysqli_real_escape_string($conn, $_POST['M_Address']);
		$M_Landline             = mysqli_real_escape_string($conn, $_POST['M_Landline']);
		$M_Contact              = mysqli_real_escape_string($conn, $_POST['M_Contact']);
		$M_Education            = mysqli_real_escape_string($conn, $_POST['M_Education']);
		$M_Occupation           = mysqli_real_escape_string($conn, $_POST['M_Occupation']);
		$M_Annual_Income        = mysqli_real_escape_string($conn, $_POST['M_Annual_Income']);
		$M_Religion             = mysqli_real_escape_string($conn, $_POST['M_Religion']);

		$Name_Siblings          = $_POST['Name_Siblings'];
		$School_Place_Work      = $_POST['School_Place_Work'];
		$Siblings_Age           = $_POST['Siblings_Age'];
		
		$Parent_status          = $_POST['Parent_status'];

		$all_Parent_status=""; 
	  foreach($Parent_status as $pStatus)  
    {  
       $all_Parent_status .= $pStatus.",";  
    } 

		$G_Name                 = mysqli_real_escape_string($conn, $_POST['G_Name']);
		$G_Address              = mysqli_real_escape_string($conn, $_POST['G_Address']);
		$G_Landline             = mysqli_real_escape_string($conn, $_POST['G_Landline']);
		$G_Contact              = mysqli_real_escape_string($conn, $_POST['G_Contact']);
		$G_Relation             = mysqli_real_escape_string($conn, $_POST['G_Relation']);
		$Emerge_Name	          = mysqli_real_escape_string($conn, $_POST['Emerge_Name']);
		$Emerge_Address         = mysqli_real_escape_string($conn, $_POST['Emerge_Address']);
		$Emerge_Contact         = mysqli_real_escape_string($conn, $_POST['Emerge_Contact']);
		$Elem_School            = mysqli_real_escape_string($conn, $_POST['Elem_School']);
		$Elem_Place	            = mysqli_real_escape_string($conn, $_POST['Elem_Place']);
		$Elem_DateAttended      = mysqli_real_escape_string($conn, $_POST['Elem_DateAttended']);
		$HS_School	            = mysqli_real_escape_string($conn, $_POST['HS_School']);
		$HS_Place               = mysqli_real_escape_string($conn, $_POST['HS_Place']);
		$HS_DateAttended        = mysqli_real_escape_string($conn, $_POST['HS_DateAttended']);
		$College_School         = mysqli_real_escape_string($conn, $_POST['College_School']);
		$College_Place          = mysqli_real_escape_string($conn, $_POST['College_Place']);
		$College_DateAttended   = mysqli_real_escape_string($conn, $_POST['College_DateAttended']);
		$Voc_School             = mysqli_real_escape_string($conn, $_POST['Voc_School']);
		$Voc_Place              = mysqli_real_escape_string($conn, $_POST['Voc_Place']);
		$Voc_DateAttended       = mysqli_real_escape_string($conn, $_POST['Voc_DateAttended']);
		$easySubject            = mysqli_real_escape_string($conn, $_POST['easySubject']);
		$difficultSubject       = mysqli_real_escape_string($conn, $_POST['difficultSubject']);
		$Sub_lowestGrade        = mysqli_real_escape_string($conn, $_POST['Sub_lowestGrade']);
		$Sub_HighestGrade       = mysqli_real_escape_string($conn, $_POST['Sub_HighestGrade']);
		$Awards                 = mysqli_real_escape_string($conn, $_POST['Awards']);
		$GWA                    = mysqli_real_escape_string($conn, $_POST['GWA']);
		$NatureSchooling        = mysqli_real_escape_string($conn, $_POST['NatureSchooling']);
		$InterruptedforHowLong  = mysqli_real_escape_string($conn, $_POST['InterruptedforHowLong']);
		$Reason                 = mysqli_real_escape_string($conn, $_POST['Reason']);

		$School_Org             = $_POST['School_Org'];
		$School_Position        = $_POST['School_Position'];
		
		$OutsideSchool_Org      = $_POST['OutsideSchool_Org'];
		$OutsideSchool_Position = $_POST['OutsideSchool_Position'];
		
		$Interests              = mysqli_real_escape_string($conn, $_POST['Interests']);
		$Skills                 = mysqli_real_escape_string($conn, $_POST['Skills']);
		$Hobbies                = mysqli_real_escape_string($conn, $_POST['Hobbies']);
		$Characteristics        = mysqli_real_escape_string($conn, $_POST['Characteristics']);
		$presentProblems        = mysqli_real_escape_string($conn, $_POST['presentProblems']);
		$presentFears           = mysqli_real_escape_string($conn, $_POST['presentFears']);
		$Disabilities           = mysqli_real_escape_string($conn, $_POST['Disabilities']);
		$ChronicIllness         = mysqli_real_escape_string($conn, $_POST['ChronicIllness']);
		$Med_Reg_taken          = mysqli_real_escape_string($conn, $_POST['Med_Reg_taken']);
		$Accidents_exp          = mysqli_real_escape_string($conn, $_POST['Accidents_exp']);
		$Operation_exp          = mysqli_real_escape_string($conn, $_POST['Operation_exp']);
		
		$date_registered        = date('Y-m-d');
		$file                   = basename($_FILES["fileToUpload"]["name"]);
		$key  				          = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

		
		$existing_email = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$user_Id'");
		$rr = mysqli_fetch_array($existing_email);
		$exist_email = $rr['email'];

		if(empty($file)) {

				if($email == $exist_email) {

						$update = mysqli_query($conn, "UPDATE users SET 
							username='$username',
							school_year='$school_year', 
							semester='$semester', 
							enrollmentStatus='$enrollmentStatus', 
							firstname='$firstname', 
							middlename='$middlename', 
							lastname='$lastname', 
							suffix='$suffix', 
							gender='$gender',
							dob='$dob', 
							age='$age', 
							place_of_birth='$place_of_birth', 
							address='$address', 
							bh_Address='$bh_Address', 
							landline='$landline', 
							email='$email', 
							contact='$contact', 
							birth_order='$birth_order', 
							civilstatus='$civilstatus', 
							school='$school', 
							language='$language', 
							religion='$religion', 
							nationality='$nationality', 
							spouseName='$spouseName', 
							no_of_Children='$no_of_Children', 
							F_Name='$F_Name', 
							F_Address='$F_Address', 
							F_Landline='$F_Landline', 
							F_Contact='$F_Contact', 
							F_Education='$F_Education', 
							F_Occupation='$F_Occupation', 
							F_Annual_Income='$F_Annual_Income', 
							F_Religion='$F_Religion', 
							M_Name='$M_Name', 
							M_Address='$M_Address', 
							M_Landline='$M_Landline', 
							M_Contact='$M_Contact', 
							M_Education='$M_Education', 
							M_Occupation='$M_Occupation', 
							M_Annual_Income='$M_Annual_Income', 
							M_Religion='$M_Religion', 
							Parent_status='$all_Parent_status', 
							G_Name='$G_Name', 
							G_Address='$G_Address', 
							G_Landline='$G_Landline',
							G_Contact='$G_Contact', 
							G_Relation='$G_Relation', 
							Emerge_Name='$Emerge_Name', 
							Emerge_Address='$Emerge_Address', 
							Emerge_Contact='$Emerge_Contact', 
							Elem_School='$Elem_School', 
							Elem_Place='$Elem_Place', 
							Elem_DateAttended='$Elem_DateAttended', 
							HS_School='$HS_School', 
							HS_Place='$HS_Place', 
							HS_DateAttended='$HS_DateAttended', 
							College_School='$College_School', 
							College_Place='$College_Place', 
							College_DateAttended='$College_DateAttended', 
							Voc_School='$Voc_School',
							Voc_Place='$Voc_Place', 
							Voc_DateAttended='$Voc_DateAttended', 
							easySubject='$easySubject', 
							difficultSubject='$difficultSubject', 
							Sub_lowestGrade='$Sub_lowestGrade', 
							Sub_HighestGrade='$Sub_HighestGrade', 
							Awards='$Awards', 
							GWA='$GWA', 
							NatureSchooling='$NatureSchooling', 
							InterruptedforHowLong='$InterruptedforHowLong', 
							Reason='$Reason', 
							Interests='$Interests', 
							Skills='$Skills', 
							Hobbies='$Hobbies', 
							Characteristics='$Characteristics', 
							presentProblems='$presentProblems', 
							presentFears='$presentFears', 
							ChronicIllness='$ChronicIllness', 
							Med_Reg_taken='$Med_Reg_taken', 
							Accidents_exp='$Accidents_exp', 
							Operation_exp='$Operation_exp' WHERE user_Id='$user_Id' ");
						if($update) {
              	$del = mysqli_query($conn, "DELETE FROM siblingsrecord WHERE user_Id='$user_Id' ");
              	$del2 = mysqli_query($conn, "DELETE FROM insideschool_org WHERE user_Id='$user_Id' ");
              	$del3 = mysqli_query($conn, "DELETE FROM outsideschool_org WHERE user_Id='$user_Id' ");

              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}
							$_SESSION['message']  = "Record has been updated.";
	            $_SESSION['text'] = "Update successful";
			        $_SESSION['status'] = "success";
							header("Location: users_update.php?user_Id=".$user_Id);
						} else {
							$_SESSION['message']  = "Something went wrong while updating the record.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: users_update.php?user_Id=".$user_Id);
						}

				} else {
					$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
					if(mysqli_num_rows($check) > 0) {
						$_SESSION['message']  = "Email already exists.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
					} else {
							
						$update = mysqli_query($conn, "UPDATE users SET 
							username='$username',
							school_year='$school_year', 
							semester='$semester', 
							enrollmentStatus='$enrollmentStatus', 
							firstname='$firstname', 
							middlename='$middlename', 
							lastname='$lastname', 
							suffix='$suffix', 
							gender='$gender',
							dob='$dob', 
							age='$age', 
							place_of_birth='$place_of_birth', 
							address='$address', 
							bh_Address='$bh_Address', 
							landline='$landline', 
							email='$email', 
							contact='$contact', 
							birth_order='$birth_order', 
							civilstatus='$civilstatus', 
							school='$school', 
							language='$language', 
							religion='$religion', 
							nationality='$nationality', 
							spouseName='$spouseName', 
							no_of_Children='$no_of_Children', 
							F_Name='$F_Name', 
							F_Address='$F_Address', 
							F_Landline='$F_Landline', 
							F_Contact='$F_Contact', 
							F_Education='$F_Education', 
							F_Occupation='$F_Occupation', 
							F_Annual_Income='$F_Annual_Income', 
							F_Religion='$F_Religion', 
							M_Name='$M_Name', 
							M_Address='$M_Address', 
							M_Landline='$M_Landline', 
							M_Contact='$M_Contact', 
							M_Education='$M_Education', 
							M_Occupation='$M_Occupation', 
							M_Annual_Income='$M_Annual_Income', 
							M_Religion='$M_Religion', 
							Parent_status='$all_Parent_status', 
							G_Name='$G_Name', 
							G_Address='$G_Address', 
							G_Landline='$G_Landline',
							G_Contact='$G_Contact', 
							G_Relation='$G_Relation', 
							Emerge_Name='$Emerge_Name', 
							Emerge_Address='$Emerge_Address', 
							Emerge_Contact='$Emerge_Contact', 
							Elem_School='$Elem_School', 
							Elem_Place='$Elem_Place', 
							Elem_DateAttended='$Elem_DateAttended', 
							HS_School='$HS_School', 
							HS_Place='$HS_Place', 
							HS_DateAttended='$HS_DateAttended', 
							College_School='$College_School', 
							College_Place='$College_Place', 
							College_DateAttended='$College_DateAttended', 
							Voc_School='$Voc_School',
							Voc_Place='$Voc_Place', 
							Voc_DateAttended='$Voc_DateAttended', 
							easySubject='$easySubject', 
							difficultSubject='$difficultSubject', 
							Sub_lowestGrade='$Sub_lowestGrade', 
							Sub_HighestGrade='$Sub_HighestGrade', 
							Awards='$Awards', 
							GWA='$GWA', 
							NatureSchooling='$NatureSchooling', 
							InterruptedforHowLong='$InterruptedforHowLong', 
							Reason='$Reason', 
							Interests='$Interests', 
							Skills='$Skills', 
							Hobbies='$Hobbies', 
							Characteristics='$Characteristics', 
							presentProblems='$presentProblems', 
							presentFears='$presentFears', 
							ChronicIllness='$ChronicIllness', 
							Med_Reg_taken='$Med_Reg_taken', 
							Accidents_exp='$Accidents_exp', 
							Operation_exp='$Operation_exp' WHERE user_Id='$user_Id' ");
						if($update) {
              	$del = mysqli_query($conn, "DELETE FROM siblingsrecord WHERE user_Id='$user_Id' ");
              	$del2 = mysqli_query($conn, "DELETE FROM insideschool_org WHERE user_Id='$user_Id' ");
              	$del3 = mysqli_query($conn, "DELETE FROM outsideschool_org WHERE user_Id='$user_Id' ");

              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}
							$_SESSION['message']  = "Record has been updated.";
	            $_SESSION['text'] = "Update successful";
			        $_SESSION['status'] = "success";
							header("Location: users_update.php?user_Id=".$user_Id);
						} else {
							$_SESSION['message']  = "Something went wrong while updating the record.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: users_update.php?user_Id=".$user_Id);
						}

					}
				}

		} else {

					if($email == $exist_email) {

						// Check if image file is a actual image or fake image
	          $target_dir = "../images-users/";
	          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	          $uploadOk = 1;
	          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	          // Allow certain file formats
	          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	          $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
	          $uploadOk = 0;
	          }

	          // Check if $uploadOk is set to 0 by an error
	          if ($uploadOk == 0) {
	          $_SESSION['message']  = "Your file was not uploaded.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
	          // if everything is ok, try to upload file
	          } else {

	              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	             	
	              	$update = mysqli_query($conn, "UPDATE users SET 
	              		username='$username',
										school_year='$school_year', 
										semester='$semester', 
										enrollmentStatus='$enrollmentStatus', 
										firstname='$firstname', 
										middlename='$middlename', 
										lastname='$lastname', 
										suffix='$suffix', 
										gender='$gender',
										dob='$dob', 
										age='$age', 
										place_of_birth='$place_of_birth', 
										address='$address', 
										bh_Address='$bh_Address', 
										landline='$landline', 
										email='$email', 
										contact='$contact', 
										birth_order='$birth_order', 
										civilstatus='$civilstatus', 
										school='$school', 
										language='$language', 
										religion='$religion', 
										nationality='$nationality', 
										spouseName='$spouseName', 
										no_of_Children='$no_of_Children', 
										F_Name='$F_Name', 
										F_Address='$F_Address', 
										F_Landline='$F_Landline', 
										F_Contact='$F_Contact', 
										F_Education='$F_Education', 
										F_Occupation='$F_Occupation', 
										F_Annual_Income='$F_Annual_Income', 
										F_Religion='$F_Religion', 
										M_Name='$M_Name', 
										M_Address='$M_Address', 
										M_Landline='$M_Landline', 
										M_Contact='$M_Contact', 
										M_Education='$M_Education', 
										M_Occupation='$M_Occupation', 
										M_Annual_Income='$M_Annual_Income', 
										M_Religion='$M_Religion', 
										Parent_status='$all_Parent_status', 
										G_Name='$G_Name', 
										G_Address='$G_Address', 
										G_Landline='$G_Landline',
										G_Contact='$G_Contact', 
										G_Relation='$G_Relation', 
										Emerge_Name='$Emerge_Name', 
										Emerge_Address='$Emerge_Address', 
										Emerge_Contact='$Emerge_Contact', 
										Elem_School='$Elem_School', 
										Elem_Place='$Elem_Place', 
										Elem_DateAttended='$Elem_DateAttended', 
										HS_School='$HS_School', 
										HS_Place='$HS_Place', 
										HS_DateAttended='$HS_DateAttended', 
										College_School='$College_School', 
										College_Place='$College_Place', 
										College_DateAttended='$College_DateAttended', 
										Voc_School='$Voc_School',
										Voc_Place='$Voc_Place', 
										Voc_DateAttended='$Voc_DateAttended', 
										easySubject='$easySubject', 
										difficultSubject='$difficultSubject', 
										Sub_lowestGrade='$Sub_lowestGrade', 
										Sub_HighestGrade='$Sub_HighestGrade', 
										Awards='$Awards', 
										GWA='$GWA', 
										NatureSchooling='$NatureSchooling', 
										InterruptedforHowLong='$InterruptedforHowLong', 
										Reason='$Reason', 
										Interests='$Interests', 
										Skills='$Skills', 
										Hobbies='$Hobbies', 
										Characteristics='$Characteristics', 
										presentProblems='$presentProblems', 
										presentFears='$presentFears', 
										ChronicIllness='$ChronicIllness', 
										Med_Reg_taken='$Med_Reg_taken', 
										Accidents_exp='$Accidents_exp', 
										Operation_exp='$Operation_exp',
										image='$file' WHERE user_Id='$user_Id' ");
								if($update) {
              	$del = mysqli_query($conn, "DELETE FROM siblingsrecord WHERE user_Id='$user_Id' ");
              	$del2 = mysqli_query($conn, "DELETE FROM insideschool_org WHERE user_Id='$user_Id' ");
              	$del3 = mysqli_query($conn, "DELETE FROM outsideschool_org WHERE user_Id='$user_Id' ");

              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}
							$_SESSION['message']  = "Record has been updated.";
	            $_SESSION['text'] = "Update successful";
			        $_SESSION['status'] = "success";
							header("Location: users_update.php?user_Id=".$user_Id);
						} else {
							$_SESSION['message']  = "Something went wrong while updating the record.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: users_update.php?user_Id=".$user_Id);
						}

	      
	              } else {
	                    $_SESSION['message'] = "There was an error uploading your file.";
									    $_SESSION['text'] = "Please try again.";
									    $_SESSION['status'] = "error";
											header("Location: users_update.php?user_Id=".$user_Id);
	              }
	 					}

						

				} else {
					$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
					if(mysqli_num_rows($check) > 0) {
						$_SESSION['message']  = "Email already exists.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
					} else {
							
						// Check if image file is a actual image or fake image
	          $target_dir = "../images-users/";
	          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	          $uploadOk = 1;
	          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	          // Allow certain file formats
	          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	          $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
	          $uploadOk = 0;
	          }

	          // Check if $uploadOk is set to 0 by an error
	          if ($uploadOk == 0) {
	          $_SESSION['message']  = "Your file was not uploaded.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header("Location: users_update.php?user_Id=".$user_Id);
	          // if everything is ok, try to upload file
	          } else {

	              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	             	
	              	$update = mysqli_query($conn, "UPDATE users SET 
	              		username='$username',
										school_year='$school_year', 
										semester='$semester', 
										enrollmentStatus='$enrollmentStatus', 
										firstname='$firstname', 
										middlename='$middlename', 
										lastname='$lastname', 
										suffix='$suffix', 
										gender='$gender',
										dob='$dob', 
										age='$age', 
										place_of_birth='$place_of_birth', 
										address='$address', 
										bh_Address='$bh_Address', 
										landline='$landline', 
										email='$email', 
										contact='$contact', 
										birth_order='$birth_order', 
										civilstatus='$civilstatus', 
										school='$school', 
										language='$language', 
										religion='$religion', 
										nationality='$nationality', 
										spouseName='$spouseName', 
										no_of_Children='$no_of_Children', 
										F_Name='$F_Name', 
										F_Address='$F_Address', 
										F_Landline='$F_Landline', 
										F_Contact='$F_Contact', 
										F_Education='$F_Education', 
										F_Occupation='$F_Occupation', 
										F_Annual_Income='$F_Annual_Income', 
										F_Religion='$F_Religion', 
										M_Name='$M_Name', 
										M_Address='$M_Address', 
										M_Landline='$M_Landline', 
										M_Contact='$M_Contact', 
										M_Education='$M_Education', 
										M_Occupation='$M_Occupation', 
										M_Annual_Income='$M_Annual_Income', 
										M_Religion='$M_Religion', 
										Parent_status='$all_Parent_status', 
										G_Name='$G_Name', 
										G_Address='$G_Address', 
										G_Landline='$G_Landline',
										G_Contact='$G_Contact', 
										G_Relation='$G_Relation', 
										Emerge_Name='$Emerge_Name', 
										Emerge_Address='$Emerge_Address', 
										Emerge_Contact='$Emerge_Contact', 
										Elem_School='$Elem_School', 
										Elem_Place='$Elem_Place', 
										Elem_DateAttended='$Elem_DateAttended', 
										HS_School='$HS_School', 
										HS_Place='$HS_Place', 
										HS_DateAttended='$HS_DateAttended', 
										College_School='$College_School', 
										College_Place='$College_Place', 
										College_DateAttended='$College_DateAttended', 
										Voc_School='$Voc_School',
										Voc_Place='$Voc_Place', 
										Voc_DateAttended='$Voc_DateAttended', 
										easySubject='$easySubject', 
										difficultSubject='$difficultSubject', 
										Sub_lowestGrade='$Sub_lowestGrade', 
										Sub_HighestGrade='$Sub_HighestGrade', 
										Awards='$Awards', 
										GWA='$GWA', 
										NatureSchooling='$NatureSchooling', 
										InterruptedforHowLong='$InterruptedforHowLong', 
										Reason='$Reason', 
										Interests='$Interests', 
										Skills='$Skills', 
										Hobbies='$Hobbies', 
										Characteristics='$Characteristics', 
										presentProblems='$presentProblems', 
										presentFears='$presentFears', 
										ChronicIllness='$ChronicIllness', 
										Med_Reg_taken='$Med_Reg_taken', 
										Accidents_exp='$Accidents_exp', 
										Operation_exp='$Operation_exp',
										image='$file' WHERE user_Id='$user_Id' ");
								if($update) {
              	$del = mysqli_query($conn, "DELETE  FROM siblingsrecord WHERE user_Id='$user_Id' ");
              	$del2 = mysqli_query($conn, "DELETE  FROM insideschool_org WHERE user_Id='$user_Id' ");
              	$del3 = mysqli_query($conn, "DELETE  FROM outsideschool_org WHERE user_Id='$user_Id' ");

              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}
							$_SESSION['message']  = "Record has been updated.";
	            $_SESSION['text'] = "Update successful";
			        $_SESSION['status'] = "success";
							header("Location: users_update.php?user_Id=".$user_Id);
						} else {
							$_SESSION['message']  = "Something went wrong while updating the record.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: users_update.php?user_Id=".$user_Id);
						}

	      
	              } else {
	                    $_SESSION['message'] = "There was an error uploading your file.";
									    $_SESSION['text'] = "Please try again.";
									    $_SESSION['status'] = "error";
											header("Location: users_update.php?user_Id=".$user_Id);
	              }
	 					}

					}
				}


					








					
		}
	}
		


		

			






	// CHANGE users PASSWORD
	if(isset($_POST['password_user'])) {

    	$user_Id    = $_POST['user_Id'];	
    	$OldPassword = $_POST['OldPassword'];
    	$password    = $_POST['password'];
    	$cpassword   = $_POST['cpassword'];

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: users.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$password' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: users.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users.php");
    	}

    }








   // APPROVE USER ACCOUNT
	if(isset($_POST['approve_user'])) {
		$user_Id = $_POST['user_Id'];
		$user_email  = $_POST['email'];

		$delete = mysqli_query($conn, "UPDATE users SET user_status='Confirmed' WHERE User_Id='$user_Id'");
		if($delete) {


							$email   = $user_email ;
					    $subject = 'Account approved!';
					    $message = '<h3>Congratulations!</h3>
													<p>Good day sir/maam , we have successfully approved your account. Thank you!</p>';

									//Load composer's autoloader

							    $mail = new PHPMailer(true);                            
							    try {
							        //Server settings
                      $mail->isSMTP();                                     
                      $mail->Host = 'smtp.gmail.com';                      
                      $mail->SMTPAuth = true;                             
                      $mail->Username = 'nhsmedellin@gmail.com';     
                      $mail->Password = 'fgzyhjjhjxdikkjp';              
                      $mail->SMTPOptions = array(
                          'ssl' => array(
                          'verify_peer' => false,
                          'verify_peer_name' => false,
                          'allow_self_signed' => true
                          )
                      );                         
                      $mail->SMTPSecure = 'ssl';                           
                      $mail->Port = 465;                                   

                      //Send Email
                      $mail->setFrom('nhsmedellin@gmail.com');
                      
                      //Recipients
                      $mail->addAddress($email);              
                      $mail->addReplyTo('nhsmedellin@gmail.com');
                      
                      //Content
                      $mail->isHTML(true);                                  
                      $mail->Subject = $subject;
                      $mail->Body    = $message;

                      $mail->send();
									
							     		$_SESSION['message']  = "User's account has been approved!";
					            $_SESSION['text'] = "Approval successful";
							        $_SESSION['status'] = "success";
											header("Location: users.php");

							    } catch (Exception $e) {
							    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
				            $_SESSION['text'] = "Please try again.";
						        $_SESSION['status'] = "error";
										header("Location: users.php");
							    }

		} else {
						$_SESSION['message'] = "Something went wrong while updating the record.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users.php");
		}
	}






	// UPDATE ADMIN PROFILE
	if(isset($_POST['update_profile'])) {

		$user_Id    = $_POST['user_Id'];
		$firstname  = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname   = $_POST['lastname'];
		$suffix     = $_POST['suffix'];
		$gender     = $_POST['gender'];
		$dob        = $_POST['dob'];
		$age        = $_POST['age'];
		$contact    = $_POST['contact'];
		$email      = $_POST['email'];
		$address    = $_POST['address'];

		$save = mysqli_query($conn, "UPDATE users SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE user_Id='$user_Id'");
    if($save) {
          $_SESSION['message']  = "Admin information has been updated!";
          $_SESSION['text'] = "Updated successfully!";
	        $_SESSION['status'] = "success";
					header("Location: profile.php");                          
    } else {
          $_SESSION['message'] = "Something went wrong while saving the information.";
          $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
					header("Location: profile.php");
    }
	}


	// CHANGE ADMIN PASSWORD
	if(isset($_POST['update_password_admin'])) {

    	$user_Id    = $_POST['user_Id'];
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: profile.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$password' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: profile.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: profile.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: profile.php");
    	}

    }




  // UPDATE ADMIN PROFILE
	if(isset($_POST['update_profile_admin'])) {

		$user_Id    = $_POST['user_Id'];
		$file       = basename($_FILES["fileToUpload"]["name"]);

	  // Check if image file is a actual image or fake image
    $target_dir = "../images-users/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
    $_SESSION['text'] = "Please try again.";
    $_SESSION['status'] = "error";
		header("Location: profile.php");
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    $_SESSION['message']  = "Your file was not uploaded.";
    $_SESSION['text'] = "Please try again.";
    $_SESSION['status'] = "error";
		header("Location: profile.php");

    // if everything is ok, try to upload file
    } else {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          	$save = mysqli_query($conn, "UPDATE users SET image='$file' WHERE user_Id='$user_Id'");
     
            if($save) {
            	$_SESSION['message'] = "Admin profile has been updated!";
	            $_SESSION['text'] = "Updated successfully!";
			        $_SESSION['status'] = "success";
							header("Location: profile.php");
            } else {
              $_SESSION['message'] = "Something went wrong while updating the information.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: profile.php");
            }
        } else {
              $_SESSION['message'] = "There was an error uploading your file.";
	            $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
							header("Location: profile.php");
        }

		}
	}




// UPDATE CATEGORY
if(isset($_POST['update_category'])) {
	$category_Id   = $_POST['category_Id'];
	$category_name = $_POST['category_name'];
	$no_items      = $_POST['no_items'];
	$timelimit     = $_POST['timelimit'];

	$save = mysqli_query($conn, "UPDATE category SET cat_name='$category_name', no_of_items='$no_items', time_limit='$timelimit' WHERE cat_Id='$category_Id'");
	if($save) {
  	$_SESSION['message'] = "Category has been successfully updated!";
    $_SESSION['text'] = "Updated successfully!";
    $_SESSION['status'] = "success";
		header("Location: category.php");
  } else {
    $_SESSION['message'] = "Something went wrong while updating the information.";
    $_SESSION['text'] = "Please try again.";
    $_SESSION['status'] = "error";
		header("Location: category.php");
  }
}

	

	// UPDATE QUESTION BY CATEGORY
	if(isset($_POST['update_question'])) {
		$cat_Id         = $_POST['cat_Id'];
		$quest_Id       = $_POST['quest_Id'];
		// $question       = $_POST['question'];
		// $choice_one     = $_POST['choice_one'];
		// $choice_two     = $_POST['choice_two'];
		// $choice_three   = $_POST['choice_three'];
		// $choice_four    = $_POST['choice_four'];
		// $correct_answer = $_POST['correct_answer'];
		$question       = $_POST['question'];
		$question        = str_replace("'", "\'", $question);
		
		$choice_one     = $_POST['choice_one'];
		$choice_one        = str_replace("'", "\'", $choice_one);

		$choice_two     = $_POST['choice_two'];
		$choice_two        = str_replace("'", "\'", $choice_two);

		$choice_three   = $_POST['choice_three'];
		$choice_three        = str_replace("'", "\'", $choice_three);

		$choice_four    = $_POST['choice_four'];
		$choice_four        = str_replace("'", "\'", $choice_four);

		$correct_answer = $_POST['correct_answer'];
		$correct_answer        = str_replace("'", "\'", $correct_answer);

		$update = mysqli_query($conn, "UPDATE questions SET question='$question', choice_one='$choice_one', choice_two='$choice_two', choice_three='$choice_three', choice_four='$choice_four', correct_answer='$correct_answer' WHERE quest_Id='$quest_Id'");
		if($update) {
	  	$_SESSION['message'] = "Question has been successfully updated!";
	    $_SESSION['text'] = "Updated successfully!";
	    $_SESSION['status'] = "success";
			header('Location: category_add_question_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$cat_Id.'');
	  } else {
	    $_SESSION['message'] = "Something went wrong while updating the information.";
	    $_SESSION['text'] = "Please try again.";
	    $_SESSION['status'] = "error";
			header('Location: category_add_question_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$cat_Id.'');
	  }
	}





	// UPDATE QUESTION
	if(isset($_POST['update_quest'])) {
		$cat_Id         = $_POST['category_Id'];
		$quest_Id       = $_POST['quest_Id'];
		// $question       = $_POST['question'];
		// $choice_one     = $_POST['choice_one'];
		// $choice_two     = $_POST['choice_two'];
		// $choice_three   = $_POST['choice_three'];
		// $choice_four    = $_POST['choice_four'];
		// $correct_answer = $_POST['correct_answer'];
		$question       = $_POST['question'];
		$question        = str_replace("'", "\'", $question);
		
		$choice_one     = $_POST['choice_one'];
		$choice_one        = str_replace("'", "\'", $choice_one);

		$choice_two     = $_POST['choice_two'];
		$choice_two        = str_replace("'", "\'", $choice_two);

		$choice_three   = $_POST['choice_three'];
		$choice_three        = str_replace("'", "\'", $choice_three);

		$choice_four    = $_POST['choice_four'];
		$choice_four        = str_replace("'", "\'", $choice_four);

		$correct_answer = $_POST['correct_answer'];
		$correct_answer        = str_replace("'", "\'", $correct_answer);

		$fetch = mysqli_query($conn, "SELECT * FROM questions WHERE quest_Id='$quest_Id'");
		if(mysqli_num_rows($fetch) > 0) {
			$row = mysqli_fetch_array($fetch);
			$quest_cat_Id = $row['quest_category_Id'];

			if($cat_Id == $quest_cat_Id) {
				$update = mysqli_query($conn, "UPDATE questions SET quest_category_Id='$cat_Id', question='$question', choice_one='$choice_one', choice_two='$choice_two', choice_three='$choice_three', choice_four='$choice_four', correct_answer='$correct_answer' WHERE quest_Id='$quest_Id'");
				if($update) {
			  	$_SESSION['message'] = "Question has been successfully updated!";
			    $_SESSION['text'] = "Updated successfully!";
			    $_SESSION['status'] = "success";
					header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$cat_Id.'');
			  } else {
			    $_SESSION['message'] = "Something went wrong while updating the information.";
			    $_SESSION['text'] = "Please try again.";
			    $_SESSION['status'] = "error";
					header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
			  }
			} else {

			  $get_cat = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$cat_Id'");
				if(mysqli_num_rows($get_cat) > 0) {
					$row2 = mysqli_fetch_array($get_cat);
					$qa = $row2['questions_added'];
					$items = $row2['no_of_items'];
					$add = $row2['questions_added'] + 1;

					if($qa < $items) {
						$update2 = mysqli_query($conn, "UPDATE category SET questions_added='$add' WHERE cat_Id='$cat_Id'");
						if($update2) {
							$get_cat2 = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$quest_cat_Id'");
							if(mysqli_num_rows($get_cat2) > 0) {
									$row3 = mysqli_fetch_array($get_cat2);
									$qa2 = $row3['questions_added']-1;
									$update3 = mysqli_query($conn, "UPDATE category SET questions_added='$qa2' WHERE cat_Id='$quest_cat_Id'");
									if($update3) {
							    	$update = mysqli_query($conn, "UPDATE questions SET quest_category_Id='$cat_Id', question='$question', choice_one='$choice_one', choice_two='$choice_two', choice_three='$choice_three', choice_four='$choice_four', correct_answer='$correct_answer' WHERE quest_Id='$quest_Id'");
											if($update) {
												$_SESSION['message'] = "Question has been updated!";
									      $_SESSION['text'] = "Updated successfully!";
									      $_SESSION['status'] = "success";
												header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$cat_Id.'');
											} else {
										    $_SESSION['message'] = "Something went wrong while updating the information.";
										    $_SESSION['text'] = "Please try again.";
										    $_SESSION['status'] = "error";
												header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
										  }
							    } else {
							      $_SESSION['message'] = "Something went wrong while saving the information.";
							      $_SESSION['text'] = "Please try again.";
							      $_SESSION['status'] = "error";
										header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
							    }
							} else {
								$_SESSION['message'] = "Category not found.";
						    $_SESSION['text'] = "Please try again.";
						    $_SESSION['status'] = "error";
								header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
							}
				    } else {
				      $_SESSION['message'] = "Something went wrong while saving the information.";
				      $_SESSION['text'] = "Please try again.";
				      $_SESSION['status'] = "error";
							header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
				    }
					} else {
						$_SESSION['message'] = "You have reached the limit of items in this category.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
					}

				} else {
						$_SESSION['message'] = "Category not found.";
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$quest_cat_Id.'');
				}
			  
				
			}
		} else {
			$_SESSION['message'] = "Question not found.";
	    $_SESSION['text'] = "Please try again.";
	    $_SESSION['status'] = "error";
			header('Location: questions_update.php?quest_Id='.$quest_Id.'&&cat_Id='.$cat_Id.'');
		}

		
	}
	
	// if(isset($_POST['update_quest'])) {
	// 	$cat_Id         = $_POST['category_Id'];
	// 	$quest_Id       = $_POST['quest_Id'];
	// 	$question       = $_POST['question'];
	// 	$choice_one     = $_POST['choice_one'];
	// 	$choice_two     = $_POST['choice_two'];
	// 	$choice_three   = $_POST['choice_three'];
	// 	$choice_four    = $_POST['choice_four'];
	// 	$correct_answer = $_POST['correct_answer'];



	// }

?>