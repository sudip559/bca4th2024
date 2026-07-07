<?php 
if(isset($_POST['create']))
{
    $priority = $_POST['priority'];
    $name = $_POST['name'];
    $qry = "INSERT INTO categories(priority, name) VALUES($priority, '$name')";
    include 'dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'closeconnection.php';
    if($result)
    {
        echo "<script>alert('Category created successfully.'); window.location.href='categories.php';</script>";
    }
}