<?php 
	include '../config.php';

	// DELETE USER
	if(isset($_POST['delete_admin'])) {
		$user_Id = $_POST['user_Id'];

		$delete = mysqli_query($conn, "DELETE FROM users WHERE user_Id='$user_Id'");
		if($delete) {
	      	$_SESSION['message'] = "Admin information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: admin.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: admin.php");
	      }
	}


	// DELETE users
	if(isset($_POST['delete_user'])) {
		$user_Id = $_POST['user_Id'];

		$delete = mysqli_query($conn, "DELETE FROM users WHERE user_Id='$user_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "User information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: users.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: users.php");
	      }
	}




	// DELETE CATEGORY
	if(isset($_POST['delete_category'])) {
		$category_Id = $_POST['category_Id'];

		$delete = mysqli_query($conn, "DELETE FROM category WHERE cat_Id='$category_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Category has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: category.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: category.php");
	      }
	}


	// DELETE QUESTION BY CATEGORY
	if(isset($_POST['delete_question'])) {
		$quest_Id = $_POST['quest_Id'];

	 	$fetch = mysqli_query($conn, "SELECT * FROM questions WHERE quest_Id='$quest_Id'");
	 	if(mysqli_num_rows($fetch) > 0) {
	 		$row = mysqli_fetch_array($fetch);
	 		$quest_cat_Id = $row['quest_category_Id'];
	 		$cat = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$quest_cat_Id'");
	 		if(mysqli_num_rows($cat) > 0) {
	 			$row2 = mysqli_fetch_array($cat);
	 			$added_questions = $row2['questions_added']-1;
	 			
 			 	$delete = mysqli_query($conn, "DELETE FROM questions WHERE quest_Id='$quest_Id'");
 				if($delete) {
 					$update = mysqli_query($conn, "UPDATE category SET questions_added='$added_questions' WHERE cat_Id='$quest_cat_Id'");
 			 		if($update) {
	 					$_SESSION['message'] = "Question has been deleted!";
				        $_SESSION['text'] = "Deleted successfully!";
				        $_SESSION['status'] = "success";
						header('Location: category_add_question.php?cat_Id='.$quest_cat_Id.'');
					} else {
				        $_SESSION['message'] = "Something went wrong while deleting the record";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header('Location: category_add_question.php?cat_Id='.$quest_cat_Id.'');
				    }
 				} else {
			        $_SESSION['message'] = "Something went wrong while deleting the record.";
			        $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
					header('Location: category_add_question.php?cat_Id='.$quest_cat_Id.'');
			    }
	 		} else {
	 			$_SESSION['message'] = "Category not found.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header('Location: category_add_question.php?cat_Id='.$quest_cat_Id.'');
	 		}
	 	} else {
	 		$_SESSION['message'] = "Question not found.";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header('Location: category_add_question.php?cat_Id='.$quest_cat_Id.'');
	 	}
	}






	// DELETE QUESTION
	if(isset($_POST['delete_quest'])) {
		$quest_Id = $_POST['quest_Id'];

	 	$fetch = mysqli_query($conn, "SELECT * FROM questions WHERE quest_Id='$quest_Id'");
	 	if(mysqli_num_rows($fetch) > 0) {
	 		$row = mysqli_fetch_array($fetch);
	 		$quest_cat_Id = $row['quest_category_Id'];
	 		$cat = mysqli_query($conn, "SELECT * FROM category WHERE cat_Id='$quest_cat_Id'");
	 		if(mysqli_num_rows($cat) > 0) {
	 			$row2 = mysqli_fetch_array($cat);
	 			$added_questions = $row2['questions_added']-1;
	 			
 			 	$delete = mysqli_query($conn, "DELETE FROM questions WHERE quest_Id='$quest_Id'");
 				if($delete) {
 					$update = mysqli_query($conn, "UPDATE category SET questions_added='$added_questions' WHERE cat_Id='$quest_cat_Id'");
 			 		if($update) {
	 					$_SESSION['message'] = "Question has been deleted!";
				        $_SESSION['text'] = "Deleted successfully!";
				        $_SESSION['status'] = "success";
						header('Location: questions.php');
					} else {
				        $_SESSION['message'] = "Something went wrong while deleting the record";
				        $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
						header('Location: questions.php');
				    }
 				} else {
			        $_SESSION['message'] = "Something went wrong while deleting the record.";
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
	 		$_SESSION['message'] = "Question not found.";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header('Location: questions.php');
	 	}
	}
	

?>

