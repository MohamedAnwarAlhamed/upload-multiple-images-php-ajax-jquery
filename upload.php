<?php
   if(isset($_FILES['images'])){
      $errors= array();
      $file_name = $_FILES['images']['name'];
      $file_size = $_FILES['images']['size'];
      $file_tmp = $_FILES['images']['tmp_name'];
      $file_type = $_FILES['images']['type'];
      
      // Check for errors
      if(empty($errors)==true){
         // Create a directory to store the images (if it doesn't exist already)
         $target_dir = "uploads/";
         if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
         }

         // Move each uploaded file to the target directory
         foreach($file_tmp as $key => $tmp_name){
            $target_file = $target_dir . basename($file_name[$key]);
            move_uploaded_file($tmp_name, $target_file);
         }
         echo "Images uploaded successfully.";
      }else{
         // Display errors (if any)
         print_r($errors);
      }
   }
?>