<?php 
	include '../config.php';
	use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require '../vendor/PHPMailer/src/Exception.php';
  require '../vendor/PHPMailer/src/PHPMailer.php';
  require '../vendor/PHPMailer/src/SMTP.php';

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








	// REGISTER USER
	if(isset($_POST['create_user'])) {
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

		


		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email) > 0 ) {
						$_SESSION['message']  = "Email is already taken.".$user_Id;
				    $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
						header("Location: users_add.php");            
		} else {

				  if(empty($file)) {
				  		$save = mysqli_query($conn, "INSERT INTO users (username, school_year, semester, enrollmentStatus, firstname, middlename, lastname, suffix, gender,dob, age, place_of_birth, address, bh_Address, landline, email, contact, birth_order, civilstatus, school, language, religion, nationality, spouseName, no_of_Children, F_Name, F_Address, F_Landline, F_Contact, F_Education, F_Occupation, F_Annual_Income, F_Religion, M_Name, M_Address, M_Landline, M_Contact, M_Education, M_Occupation, M_Annual_Income, M_Religion, Parent_status, G_Name, G_Address, G_Landline, G_Contact, G_Relation, Emerge_Name, Emerge_Address, Emerge_Contact, Elem_School, Elem_Place, Elem_DateAttended, HS_School, HS_Place, HS_DateAttended, College_School, College_Place, College_DateAttended, Voc_School, Voc_Place, Voc_DateAttended, easySubject, difficultSubject, Sub_lowestGrade, Sub_HighestGrade, Awards, GWA, NatureSchooling, InterruptedforHowLong, Reason, Interests, Skills, Hobbies, Characteristics, presentProblems, presentFears, ChronicIllness, Med_Reg_taken, Accidents_exp, Operation_exp, password, date_registered) VALUES ('$username', '$school_year', '$semester', '$enrollmentStatus', '$firstname', '$middlename', '$lastname', '$suffix', '$gender','$dob', '$age', '$place_of_birth', '$address', '$bh_Address', '$landline', '$email', '$contact', '$birth_order', '$civilstatus', '$school', '$language', '$religion', '$nationality', '$spouseName', '$no_of_Children', '$F_Name', '$F_Address', '$F_Landline', '$F_Contact', '$F_Education', '$F_Occupation', '$F_Annual_Income', '$F_Religion', '$M_Name', '$M_Address', '$M_Landline', '$M_Contact', '$M_Education', '$M_Occupation', '$M_Annual_Income', '$M_Religion', '$all_Parent_status', '$G_Name', '$G_Address', '$G_Landline', '$G_Contact', '$G_Relation', '$Emerge_Name', '$Emerge_Address', '$Emerge_Contact', '$Elem_School', '$Elem_Place', '$Elem_DateAttended', '$HS_School', '$HS_Place', '$HS_DateAttended', '$College_School', '$College_Place', '$College_DateAttended', '$Voc_School', '$Voc_Place', '$Voc_DateAttended', '$easySubject', '$difficultSubject', '$Sub_lowestGrade', '$Sub_HighestGrade', '$Awards', '$GWA', '$NatureSchooling', '$InterruptedforHowLong', '$Reason', '$Interests', '$Skills', '$Hobbies', '$Characteristics', '$presentProblems', '$presentFears', '$ChronicIllness', '$Med_Reg_taken', '$Accidents_exp', '$Operation_exp', '$key', '$date_registered')");

              if($save) {

              	$getID = mysqli_query($conn, "SELECT * FROM users WHERE firstname='$firstname' AND middlename='$middlename' AND lastname='$lastname' AND suffix='$suffix' AND email='$email' ");
								$row = mysqli_fetch_array($getID);
								$user_Id = $row['user_Id'];
              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}

              	$_SESSION['message']  = "User information has been successfully saved!";
						    $_SESSION['text'] = "Success";
						    $_SESSION['status'] = "success";
								header('Location: users_password.php?key='.$key.'&&user_Id='.$user_Id.' '); 
                                      
              } else {
                $_SESSION['message'] = "Something went wrong while saving the information. Please try again.";
						    $_SESSION['text'] = "Please try again.";
						    $_SESSION['status'] = "error";
								header("Location: users_add.php");
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
									header("Location: users_add.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message']  = "Your file was not uploaded.";
							    $_SESSION['text'] = "Please try again.";
							    $_SESSION['status'] = "error";
									header("Location: users_add.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO users (username, school_year, semester, enrollmentStatus, firstname, middlename, lastname, suffix, gender,dob, age, place_of_birth, address, bh_Address, landline, email, contact, birth_order, civilstatus, school, language, religion, nationality, spouseName, no_of_Children, F_Name, F_Address, F_Landline, F_Contact, F_Education, F_Occupation, F_Annual_Income, F_Religion, M_Name, M_Address, M_Landline, M_Contact, M_Education, M_Occupation, M_Annual_Income, M_Religion, Parent_status, G_Name, G_Address, G_Landline, G_Contact, G_Relation, Emerge_Name, Emerge_Address, Emerge_Contact, Elem_School, Elem_Place, Elem_DateAttended, HS_School, HS_Place, HS_DateAttended, College_School, College_Place, College_DateAttended, Voc_School, Voc_Place, Voc_DateAttended, easySubject, difficultSubject, Sub_lowestGrade, Sub_HighestGrade, Awards, GWA, NatureSchooling, InterruptedforHowLong, Reason, Interests, Skills, Hobbies, Characteristics, presentProblems, presentFears, ChronicIllness, Med_Reg_taken, Accidents_exp, Operation_exp, image, password, date_registered) VALUES ('$username', '$school_year', '$semester', '$enrollmentStatus', '$firstname', '$middlename', '$lastname', '$suffix', '$gender','$dob', '$age', '$place_of_birth', '$address', '$bh_Address', '$landline', '$email', '$contact', '$birth_order', '$civilstatus', '$school', '$language', '$religion', '$nationality', '$spouseName', '$no_of_Children', '$F_Name', '$F_Address', '$F_Landline', '$F_Contact', '$F_Education', '$F_Occupation', '$F_Annual_Income', '$F_Religion', '$M_Name', '$M_Address', '$M_Landline', '$M_Contact', '$M_Education', '$M_Occupation', '$M_Annual_Income', '$M_Religion', '$all_Parent_status', '$G_Name', '$G_Address', '$G_Landline', '$G_Contact', '$G_Relation', '$Emerge_Name', '$Emerge_Address', '$Emerge_Contact', '$Elem_School', '$Elem_Place', '$Elem_DateAttended', '$HS_School', '$HS_Place', '$HS_DateAttended', '$College_School', '$College_Place', '$College_DateAttended', '$Voc_School', '$Voc_Place', '$Voc_DateAttended', '$easySubject', '$difficultSubject', '$Sub_lowestGrade', '$Sub_HighestGrade', '$Awards', '$GWA', '$NatureSchooling', '$InterruptedforHowLong', '$Reason', '$Interests', '$Skills', '$Hobbies', '$Characteristics', '$presentProblems', '$presentFears', '$ChronicIllness', '$Med_Reg_taken', '$Accidents_exp', '$Operation_exp', '$file', '$key', '$date_registered')");

              if($save) {

              	$getID = mysqli_query($conn, "SELECT * FROM users WHERE firstname='$firstname' AND middlename='$middlename' AND lastname='$lastname' AND suffix='$suffix' AND email='$email' ");
								$row = mysqli_fetch_array($getID);
								$user_Id = $row['user_Id'];

              	foreach($Name_Siblings as $key1 => $value) {
											$siblings = mysqli_query($conn, "INSERT INTO siblingsrecord (user_Id, Name_Siblings, School_Place_Work, Siblings_Age) VALUES ('".$user_Id."' ,'".$value."', '".$School_Place_Work[$key1]."', '".$Siblings_Age[$key1]."') ");
										}
								foreach($School_Org as $key2 => $value2) {
											$sch_Org = mysqli_query($conn, "INSERT INTO insideschool_org (user_Id, School_Org, School_Position) VALUES ('".$user_Id."' ,'".$value2."', '".$School_Position[$key2]."') ");
										}
								foreach($OutsideSchool_Org as $key3 => $value3) {
											$out_sch_Org = mysqli_query($conn, "INSERT INTO outsideschool_org (user_Id, OutsideSchool_Org, OutsideSchool_Position) VALUES ('".$user_Id."' ,'".$value3."', '".$OutsideSchool_Position[$key3]."') ");
										}
	                            $_SESSION['message']  = "User information has been successfully saved!";
													    $_SESSION['text'] = "Success";
													    $_SESSION['status'] = "success";
															header('Location: users_password.php?key='.$key.'&&user_Id='.$user_Id.' ');                      
                            } else {
                              $_SESSION['message'] = "Something went wrong while saving the information. Please try again.";
													    $_SESSION['text'] = "Success";
													    $_SESSION['status'] = "error";
															header("Location: users_add.php");
                            }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
												    $_SESSION['text'] = "Please try again.";
												    $_SESSION['status'] = "error";
														header("Location: users_add.php");
                      }
				 					}
				  }
		}

	}



	


// SAVE CATEGORY
if(isset($_POST['category'])) {
	$category_name = $_POST['category_name'];
	$no_items      = $_POST['no_items'];
	$timelimit     = $_POST['timelimit'];

	$fetch = mysqli_query($conn, "SELECT * FROM category WHERE cat_name='$category_name'");
	if(mysqli_num_rows($fetch) > 0) {
		$_SESSION['message'] = "Category name already exists.";
    $_SESSION['text'] = "Please try again.";
    $_SESSION['status'] = "error";
		header("Location: category.php");
	} else {
		$save = mysqli_query($conn, "INSERT INTO category (cat_name, no_of_items, time_limit) VALUES ('$category_name', '$no_items', '$timelimit') ");
		if($save) {
    	$_SESSION['message'] = "Category has been successfully saved!";
      $_SESSION['text'] = "Saved successfully!";
      $_SESSION['status'] = "success";
			header("Location: category.php");
    } else {
      $_SESSION['message'] = "Something went wrong while saving the information.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: category.php");
    }
	}
}



// SAVE QUESTION BY CATEGORY
if(isset($_POST['save_question'])) {
	$cat_Id         = $_POST['cat_Id'];
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


	$question_exist = mysqli_query($conn, "SELECT * FROM questions WHERE question='$question' AND quest_category_Id='$cat_Id'");
	if(mysqli_num_rows($question_exist) > 0) {
			$_SESSION['message'] = "Question already exist under this selected category.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
	} else {

			$save = mysqli_query($conn, "INSERT INTO questions (quest_category_Id, question, choice_one, choice_two, choice_three, choice_four, correct_answer) VALUES ('$cat_Id', '$question', '$choice_one', '$choice_two', '$choice_three', '$choice_four', '$correct_answer')");
			if($save) {

					$get_questions_added = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$cat_Id'");
					if(mysqli_num_rows($get_questions_added) > 0) {

						$row = mysqli_fetch_array($get_questions_added);
						// USED TO COMPARE IN IF STATEMENT BELOW
						$questions = $row['questions_added'];
						// ADD 1 THE EXISTING RECORD OF QUESTIONS ADDED
						$no_of_questions = $row['questions_added'] + 1;

						if($questions < $row['no_of_items']) {
								// IF NOT EXCEEDS, INSERT...
								$update = mysqli_query($conn, "UPDATE category SET questions_added='$no_of_questions' WHERE cat_Id='$cat_Id'");
								if($update) {
						    	$_SESSION['message'] = "Question has been saved.";
						      $_SESSION['text'] = "Saved successfully!";
						      $_SESSION['status'] = "success";
									header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
						    } else {
						      $_SESSION['message'] = "Something went wrong while saving the information.";
						      $_SESSION['text'] = "Please try again.";
						      $_SESSION['status'] = "error";
									header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
						    }
						} else {
								$_SESSION['message'] = "You have reached the limit of items in this category.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
						}
						

					} else {
						$_SESSION['message'] = "Category not found.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
					}

			} else {
				$_SESSION['message'] = "Something went wrong while saving the information.";
	      $_SESSION['text'] = "Please try again.";
	      $_SESSION['status'] = "error";
				header('Location: category_add_question.php?cat_Id='.$cat_Id.'');
			}

	}
}






// SAVE QUESTION
if(isset($_POST['save_quest'])) {
	$cat_Id         = $_POST['cat_Id'];
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
	

	$question_exist = mysqli_query($conn, "SELECT * FROM questions WHERE question='$question' AND quest_category_Id='$cat_Id'");
	if(mysqli_num_rows($question_exist) > 0) {
			$_SESSION['message'] = "Question already exist under this selected category.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header('Location: questions.php');
	} else {

			$save = mysqli_query($conn, "INSERT INTO questions (quest_category_Id, question, choice_one, choice_two, choice_three, choice_four, correct_answer) VALUES ('$cat_Id', '$question', '$choice_one', '$choice_two', '$choice_three', '$choice_four', '$correct_answer')");
			if($save) {

					$get_questions_added = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$cat_Id'");
					if(mysqli_num_rows($get_questions_added) > 0) {

						$row = mysqli_fetch_array($get_questions_added);
						// USED TO COMPARE IN IF STATEMENT BELOW
						$questions = $row['questions_added'];
						// ADD 1 THE EXISTING RECORD OF QUESTIONS ADDED
						$no_of_questions = $row['questions_added'] + 1;

						if($questions < $row['no_of_items']) {
								// IF NOT EXCEEDS, INSERT...
								$update = mysqli_query($conn, "UPDATE category SET questions_added='$no_of_questions' WHERE cat_Id='$cat_Id'");
								if($update) {
						    	$_SESSION['message'] = "Question has been saved.";
						      $_SESSION['text'] = "Saved successfully!";
						      $_SESSION['status'] = "success";
									header('Location: questions.php');
						    } else {
						      $_SESSION['message'] = "Something went wrong while saving the information.";
						      $_SESSION['text'] = "Please try again.";
						      $_SESSION['status'] = "error";
									header('Location: questions.php');
						    }
						} else {
								$_SESSION['message'] = "You have reached the limit of items in this category.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: questions.php');
						}
						
					} else {
						$_SESSION['message'] = "Category not found.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header('Location: questions.php');
					}

			} else {
				$_SESSION['message'] = "Something went wrong while saving the information.";
	      $_SESSION['text'] = "Please try again.";
	      $_SESSION['status'] = "error";
				header('Location: questions.php');
			}

	}
}




?>