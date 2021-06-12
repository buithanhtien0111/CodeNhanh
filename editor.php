<?php 
    $conn = mysqli_connect("localhost","root","","demo");
    $html_code = $_POST['htmlcode'];
    $csscode = $_POST['csscode'];
    $jscode = $_POST['jscode'];
    $fetch = mysqli_query($conn, "insert into editor set htmlcode='$html_code' , csscode='$csscode' , jscode='$jscode'");
    if($fetch != "")
    {
    	echo 'Lưu Thành Công';
    	header("Location:editor_list.php");
    }
    else
    {
      	echo 'Lưu Không Thành Công';
      	header("Location:editor_list.php");
    }
?>