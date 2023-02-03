<?php
include("../../config.php");
 $id=$_GET['id'];
   

  $query="DELETE FROM career WHERE `id` ='".$id."'";
 if (!mysqli_query($conn, $query))
 {
  echo "<script language='javascript'>
{
  alert(' Error.');	
   
}
</script>";
  }


 else
 {
 	echo "<script language='javascript'>
{
  alert(' Deleted Successfully.');	
   
}
</script>
<meta http-equiv='REFRESH' content='0;https://techsum.tsdemo.co.in/admin/?page=career'></HEAD>
 
<BODY>
Please wait...
</BODY>'";
 }
mysql_close($conn);
 
?>