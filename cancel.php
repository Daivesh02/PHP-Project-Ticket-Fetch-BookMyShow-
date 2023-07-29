<?php
session_start();
include('config.php');
mysqli_query($con,"delete from tbl_bookings where book_id='".$_GET['id']."'");
$_SESSION['success']="Booking Cancelled Successfully & 50% of Money is Refunded";
header('location:profile.php');
?>