<?php include 'admin/setting/connect.php';

$sitesor=$db->prepare("select * from `site_options` where site_id=?");
$sitesor->execute(array(1));
$print=$sitesor->fetch(PDO::FETCH_ASSOC);
?>

<title><?php echo $print[ 'site_title'] ?></title>
