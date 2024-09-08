<?php
session_start();
include("index.php");
$id = $_GET['id'];
?>
<?php
ob_start();
session_start();
include("connect.php");
?>
<?php
require_once('class.upload.php');

  	
	if((isset($_POST['step']))&&(isset($_POST['step'])=='process')){
			$pic = 'picture';
			
			$handle = new Upload($_SERVER['DOCUMENT_ROOT'].'/crop/'.$_POST['tempfile']);
			
			if ($handle->uploaded) {
				$handle->file_src_name_body      = $pic; // hard name
				$handle->file_overwrite 		 = false;
				$handle->file_auto_rename 		 = true;
				$handle->image_resize            = true;
				$handle->image_x                 = 1000; //size of final picture
				$handle->image_y                 = 1000; //size of final picture
				
				$handle->jcrop                   = true;
				$handle->rect_w                  = $_POST['w']; 
				$handle->rect_h                  = $_POST['h']; 
				$handle->posX                    = $_POST['x']; 
				$handle->posY                    = $_POST['y'];
				$handle->jpeg_quality 		 	 = 100;
				$handle->Process($_SERVER['DOCUMENT_ROOT'].'/crop/photos/');
				
				//thumb-50
				$handle->file_src_name_body      = $pic; // hard name
				$handle->file_overwrite 		 = true;
				$handle->file_auto_rename 		 = true;
				$handle->image_resize            = true;
				$handle->image_x                 = 500;
				$handle->image_y                 = 500; //size of picture
				
				$handle->jcrop                   = true;
				$handle->rect_w                  = $_POST['w']; 
				$handle->rect_h                  = $_POST['h']; 
				$handle->posX                    = $_POST['x']; 
				$handle->posY                    = $_POST['y'];
				$handle->jpeg_quality 		 	 = 100;
				$handle->Process($_SERVER['DOCUMENT_ROOT'].'/crop/photos/50/');
				
				$handle->clean(); 
				echo "<script> alert('clean');</script>";
			} 
			else {
				//error
				
			}
	
	}




		rename('photos/picture_temp.jpg','../../'.$id.'.jpg');
$qry = "update bridegroom SET upload_image='".$id.".jpg' where bridegroom_id='".$id."'";
$ggg =mysqli_query($con,$qry);
			
$qry1 = "update bride SET upload_image='".$id.".jpg' where bride_id='".$id."'";
$ggg_1 =mysqli_query($con,$qry1);

if (!(mysqli_query($con,$qry))&&(!mysqli_query($con,$qry1)))
				{
				die('Error: ' . mysqli_error());
				}

	header("location:../mainpage.php");

?>