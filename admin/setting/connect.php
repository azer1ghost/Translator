<?php

try{
    $db=new PDO("mysql:host=localhost;dbname=ayshanglobal_translator",'ayshanglobal_root','4145124.Azer');
    $db->exec("set names utf8"); }

catch (PDOExpception $e) { echo $e->getMessage ();
}

$sitename="http://www.globaltranslationsgroup.com";
$adminpanelname="admin";

?>