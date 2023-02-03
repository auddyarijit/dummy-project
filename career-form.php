
<?php include("config.php");

if(isset($_POST['uploadfile'])) 
{
    
    date_default_timezone_set('Asia/Kolkata');      
    $createddate = date('Y-m-d H:i:s', time());
    
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $contact=$_POST['contact']; 
    $position=$_POST['position']; 
    $resume=$_POST['resume']; 
  
  
    $targetDir = "uploads/Resume/" ;
    $allowTypes = array('pdf','doc','csv');
  if (!file_exists($targetDir)) 
  {    
    mkdir($targetDir, 0777, true);
  }
                    
  $fileName = basename($_FILES['resume']['name']);
  $targetFilePath = $targetDir . $fileName;                        
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  if (in_array($fileType, $allowTypes)) 
  {    
    ini_set('memory_limit', '1024M' );
    ini_set('upload_max_filesize', '500M');  
    ini_set('post_max_size', '500M');  
    ini_set('max_input_time', 3600);  
    ini_set('max_execution_time', 3600);
    move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath); 
  }


$sql=" INSERT INTO `career` (`id`, `name`, `email`, `contact`, `position`, `resume`,`create_time`) 
VALUES (NULL, '$name', '$email', '$contact', '$position', '$targetFilePath','$createddate')";

if (!mysqli_query($conn, $sql)) 

{

  echo "Error Inserting Data";

  }

  else

  {

  echo "<script language='javascript'>

{

  alert(' Submitted Successfully.');  

   

}

</script>
<meta http-equiv='REFRESH' content='0;url= index.php'></HEAD>";

  }
}

 

?>
