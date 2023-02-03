<?php include("config.php");

if(isset($_POST['submit'])) 
 {

    
$name=$_POST['name']; 
$email=$_POST['email']; 
$phone=$_POST['phone']; 
$msg=$_POST['msg']; 



 $sql=" INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`) 
VALUES (NULL, '$name', '$email', '$phone', '$msg')";

if (!mysqli_query($conn, $sql)) 

{

  echo "Error Inserting Data";

  }

  else

  {

  echo "<script language='javascript'>

{

  alert(' Added Successfully.');  

   

}

</script>
<meta http-equiv='REFRESH' content='0;url= contact.php'></HEAD>";

  }
}


?>


