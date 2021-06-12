<?php 
    $conn = mysqli_connect("localhost","root","","demo");
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $fetch = mysqli_query($conn, "SELECT id FROM `users` WHERE 
                         username='$user' and password='$pass'");
    $count=mysqli_num_rows($fetch);
    if($count != "")
    {
        header("Location:editor_list.php"); 
    }
    else
    {
        header('Location:index.php');
    }
?>