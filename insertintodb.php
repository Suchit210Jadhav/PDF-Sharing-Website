<?php
session_start();
if(!isset($_SESSION['name'])){
	echo "<script type='text/javascript'> alert('Please login first');
    window.location.href = 'insertintodbphp.php';
    </script>";
}
include 'cdn.php';
include 'connect.php';
$file_text = $_POST['filetext'];
$subject = $_POST['subject'];
$file_by = $_POST['writer'];

$filename = $_FILES['fileupload']['name'];
$uploaddir = 'uploads/';

$uploadfile = $uploaddir . basename($filename);
if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $uploadfile))
{
	$files = basename($_FILES['fileupload']['tmp_name']);
	$location = "uploads/" . $filename;
    $sql_insert = "INSERT INTO files (file, text, subject, wrby) 
    VALUES ('".$location."', '".$file_text."', '".$subject."', '".$file_by."');";
    mysqli_query($connect, $sql_insert);

    echo "<script type='text/javascript'>alert('Upload Successful'); window.location.href='index.php';</script>";
}
else
{
    echo "File upload not successful\n";
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    echo "
    	<a href='index.php'>UPLOADPAGE</a>
    ";
}
?>