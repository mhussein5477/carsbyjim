<?php 

include '../helpers/dbconfig.php';
$carid = $_GET['info'];

$sql1 = $db -> query("DELETE FROM cars WHERE id = '$carid' ");


            echo "<script>
            alert('Successfully deleted a car');
            window.location.href='dashboard.php';
            </script>";
?>