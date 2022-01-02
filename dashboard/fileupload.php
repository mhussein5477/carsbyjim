<?php
include '../helpers/dbconfig.php';

   if(isset($_FILES['image'])){

      $carname = $_POST['carname'];
      $price = $_POST['price'];
      $status = $_POST['status'];
      $year = $_POST['year'];
      $gearsystem = $_POST['gearsystem'];
      $oil = $_POST['oil'];
      $description = $_POST['description'];
      $brand = $_POST['brand'];
      $slider = $_POST['slider'];

      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_name1 = $_FILES['image1']['name'];
      $file_name2 = $_FILES['image2']['name'];
      $file_name3 = $_FILES['image3']['name'];
      $file_name4 = $_FILES['image4']['name'];

      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_tmp1 = $_FILES['image1']['tmp_name'];
      $file_tmp2 = $_FILES['image2']['tmp_name'];
      $file_tmp3 = $_FILES['image3']['tmp_name'];
      $file_tmp4 = $_FILES['image4']['tmp_name'];

      $file_type = $_FILES['image']['type'];

      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $file_ext1=strtolower(end(explode('.',$_FILES['image1']['name'])));
      $file_ext2=strtolower(end(explode('.',$_FILES['image2']['name'])));
      $file_ext3=strtolower(end(explode('.',$_FILES['image3']['name'])));
      $file_ext4=strtolower(end(explode('.',$_FILES['image4']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      
      if(empty($errors)==true) {

         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         move_uploaded_file($file_tmp1,"../uploads/".$file_name1);
         move_uploaded_file($file_tmp2,"../uploads/".$file_name2);
         move_uploaded_file($file_tmp3,"../uploads/".$file_name3);
         move_uploaded_file($file_tmp4,"../uploads/".$file_name4);

         $filename = $_FILES['image']['name'];
         $filename1 = $_FILES['image1']['name'];
         $filename2 = $_FILES['image2']['name'];
         $filename3 = $_FILES['image3']['name'];
         $filename4 = $_FILES['image4']['name'];

         $sql = $db -> query("INSERT INTO cars( carname , price , old_new  , year , gearsystem, oil, description, image , brand , slider ) 
                                          VALUES(  '$carname' ,  '$price' , '$status', '$year', '$gearsystem', '$oil', '$description', '$filename', '$brand' , '$slider' )");
         $carid = mysqli_insert_id($db);                             

         $sql1 = $db -> query("INSERT INTO images( carid , image  ) 
                                          VALUES(  '$carid' ,  '$filename1' )");
         $sql2 = $db -> query("INSERT INTO images( carid , image  ) 
         VALUES(  '$carid' ,  '$filename2' )");

         $sql3 = $db -> query("INSERT INTO images( carid , image  ) 
         VALUES(  '$carid' ,  '$filename3' )");

         $sql4 = $db -> query("INSERT INTO images( carid , image  ) 
         VALUES(  '$carid' ,  '$filename4' )");

          echo "<script>
          alert('Successfully added a car');
          window.location.href='dashboard.php';
          </script>";

         
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>