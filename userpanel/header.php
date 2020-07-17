    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Translator</title>
<?php
session_start();
ob_start();

$mail=$_SESSION['user_email'];

if($mail == null){
    
echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.globaltranslationsgroup.com/login.php?login=nolog">';
exit;
}


include 'setting/connect.php';
$usersor=$db->prepare("SELECT * from users Where user_email=:login");
$usersor->execute(array('login' => $_SESSION['user_email'] ));
$say=$usersor->rowCount();

$usercek=$usersor->fetch(PDO::FETCH_ASSOC);
$user_id=$usercek['user_id'];
?>
<style media="screen">

[data-notify="container"][class*="alert-pastel-"] {
    background-color: rgb(255, 255, 238);
    border-width: 0px;
    border-left: 15px solid rgb(255, 240, 106);
    border-radius: 0px;
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.3);
    letter-spacing: 1px;
}

[data-notify="container"].alert-pastel-info {
    border-left-color: rgb(40, 223, 255);
}

[data-notify="container"].alert-pastel-danger {
    border-left-color: rgb(255, 103, 76);
}

[data-notify="container"].alert-pastel-success {
    border-left-color: rgb(91, 255, 76);
}

[data-notify="container"].alert-pastel-primary {
    border-left-color: rgb(235, 176, 49);
}

[data-notify="container"][class*="alert-pastel-"]>[data-notify="title"] {
    color: #000;
    display: block;
    font-weight: 700;
    margin-bottom: 5px;
}

[data-notify="container"][class*="alert-pastel-"]>[data-notify="message"] {
    font-weight: 400;
    color: #000;
}

[data-notify="container"][class*="close"]>[data-notify="dismiss"] {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0;
}
</style>
