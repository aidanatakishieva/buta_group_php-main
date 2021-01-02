<?php 

require_once "config.php";
$message = "";

$sql = "INSERT INTO emails(email) VALUES (?)"; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($stmt = mysqli_prepare($link,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$param_email);
        $param_email = $_POST["name_1"];

        if(mysqli_stmt_execute($stmt)){
            // header('location: services.php#form_subscribe');
            $message = "İndi xəbərlərimiz haqqında e-poçt alacaqsınız!";

        }else{
            $message = "Bir şey səhv oldu. Zəhmət olmasa bir az sonra yenə cəhd edin.";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}

?>