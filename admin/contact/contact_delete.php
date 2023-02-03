<?php
include("../../config.php");
 $id=$_GET['id'];
   

  $query="DELETE FROM contact WHERE `id` ='".$id."'";
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
<meta http-equiv='REFRESH' content='0;url=https://techsum.tsdemo.co.in/admin/?page=contact'></HEAD>
 
<BODY>
Please wait...
</BODY>'";
 }
mysql_close($conn);
 
?>