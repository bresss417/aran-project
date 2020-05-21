<?php
    
    include "conf.php";

	$strCustomerID = $_GET["id"];
	$sql = "DELETE FROM reservations WHERE id = '".$strCustomerID."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		echo "
           <script>
               alert('ลบข้อมูลเรียบร้อยแล้ว');
               window.location = 'show_co.php';
           </script>"; 
	}

	mysqli_close($conn);
?>
</body>
</html>