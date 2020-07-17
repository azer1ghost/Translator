<!--######################################### SAYTIN MOTORU ########################################-->

<?php
ob_start();				//Sesia basladildi *
session_start();
include 'connect.php';  //baglanti temin edildi *
include 'function.php';

$sitesor=$db->prepare("select * from `site_options` where site_id=?");
$sitesor->execute(array(1));
$print=$sitesor->fetch(PDO::FETCH_ASSOC);
########################## admin login ######################
//---------------------------------------------------------------------//


if (isset($_POST['loggin'])) {
	ob_start();				//Sesia basladildi *
	session_start();

$admin_login=$_POST['admin_name'];
$admin_password=md5($_POST['admin_password']);


		if ($admin_login && $admin_password ) {

		$sorgu=$db->prepare("SELECT * from admin WHERE admin_login=:name and  admin_password=:password");

		$sorgu->execute(array(
			'name'=>$admin_login,
			'password'=>$admin_password
		));

		$say=$sorgu->rowCount();

		if ($say>0) {

		$_SESSION['admin_login'] = $admin_login;


$site= "$sitename/$adminpanelname/pages/login.php?login=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/$adminpanelname/pages/login.php?login=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}

//---------------------------------------------------------------------//




#######################################################################
##########################  Parametr Update  ##########################
if (isset($_POST['esasparametrupdate'])) {          #duyme adi



if($_FILES['site_logourl']["size"] > 3000000) {

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=big";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

exit;
}

if($_FILES['site_logourl']["size"] > 0) {

$file_type=array('jpg','jpeg','png' );
$ext=strtolower(substr($_FILES['site_logourl']["name"],strpos($_FILES['site_logourl']["name"],'.')+1));
if(in_array($ext, $file_type) === false) {

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=filetype";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

exit;
}

		$uploads_dir = '../../images';                      #sekil yeri
		@$tmp_name = $_FILES['site_logourl']["tmp_name"];
		@$name = $_FILES['site_logourl']["name"];
		$xvalue3=rand(20000,32000);
		$xvalue4=rand(20000,32000);
		$xad=$xvalue3.$xvalue4;
		$site_logourl=substr($uploads_dir, 6)."/".$xad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$xad$name");

$save=$db->prepare("UPDATE site_options SET  #tablo adi

#sutun adi--> leqebi
site_title=:a,
site_sitename=:b,
site_author=:c,
site_analystic=:d,
site_keywords=:e,
site_description=:f,
site_logourl=:h


WHERE site_id={$_POST['site_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
'a'=>$_POST['site_title'],
'b'=>$_POST['site_sitename'],
'c'=>$_POST['site_author'],
'd'=>$_POST['site_analystic'],
'e'=>$_POST['site_keywords'],
'f'=>$_POST['site_description'],
'h'=>$site_logourl
 ));

$site_id=$_POST['site_id'];

if($update) {

		 	$resim_sil=$_POST['site_logourl'];
		 	unlink("../../$resim_sil");

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }



} else {

$save=$db->prepare("UPDATE site_options SET  #tablo adi

#sutun adi--> leqebi
site_title=:a,
site_sitename=:b,
site_author=:c,
site_analystic=:d,
site_keywords=:e,
site_description=:f

WHERE site_id={$_POST['site_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
'a'=>$_POST['site_title'],
'b'=>$_POST['site_sitename'],
'c'=>$_POST['site_author'],
'd'=>$_POST['site_analystic'],
'e'=>$_POST['site_keywords'],
'f'=>$_POST['site_description']
));


if($update) {

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/$adminpanelname/pages/site_options/parametr.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//




#######################################################################
########################## social update ##############################
//---------------------------------------------------------------------//

if (isset($_POST['socialupdate'])) {          #duyme adi

$save=$db->prepare("UPDATE site_options SET  #tablo adi

 #sutun adi--> leqebi
	site_facebook=:a,
	site_instagram=:b,
	site_google=:c,
	site_youtube=:d


WHERE site_id={$_POST['site_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['site_facebook'],
	'b'=>$_POST['site_instagram'],
	'c'=>$_POST['site_google'],
	'd'=>$_POST['site_youtube']


));


if($update) {

$site= "$sitename/$adminpanelname/pages/site_options/social.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/$adminpanelname/pages/site_options/social.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//








#######################################################################
########################## SMTP update ##############################
//---------------------------------------------------------------------//

if (isset($_POST['smtpupdate'])) {          #duyme adi

$save=$db->prepare("UPDATE site_options SET  #tablo adi

 #sutun adi--> leqebi
	site_smtphost=:a,
	site_smtpport=:b,
	site_smtpuser=:c,
	site_smtppassword=:d


WHERE site_id={$_POST['site_id']}");
$update=$save->execute(array(

 #sutun leqebi --> adi
	'a'=>$_POST['site_smtphost'],
	'b'=>$_POST['site_smtpport'],
	'c'=>$_POST['site_smtpuser'],
	'd'=>$_POST['site_smtppassword']


));


if($update) {

$site= "$sitename/$adminpanelname/pages/site_options/smtp.php?durum=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/$adminpanelname/pages/site_options/smtp.php?durum=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}

//---------------------------------------------------------------------//


#######################################################################
########################## user add  ######################
//---------------------------------------------------------------------//
if (isset($_POST['useradd'])) {   		#duyme adi

	$user_email=htmlspecialchars($_POST['user_email']);

		if ($user_email) {

		$sorgu=$db->prepare("SELECT * from users WHERE user_email=:xyz ");

		$sorgu->execute(array(
			'xyz'=>$user_email
		));

		$say=$sorgu->rowCount();

if ($say>0) {

$site= "$sitename/login.php?email=same";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

			exit;

} else {

	$save=$db->prepare("INSERT INTO users SET   	#tablo adi
#sutun adi--> leqebi
	user_name=:a,
	user_email=:b,
	user_pass=:c
	");
$insert=$save->execute(array(
 #sutun leqebi --> adi
	'a'=>htmlspecialchars($_POST['user_name']),
	'b'=>htmlspecialchars($_POST['user_email']),
	'c'=>htmlspecialchars($_POST['user_pass'])
	));

if($insert) {
	$login=$_POST['user_email'];
	$pass=$_POST['user_pass'];
$site= "$sitename/login.php?useradd=true&login=$login&pass=$pass#login-form";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/login.php?useradd=false";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }
}
}
}
#########################################################################
//---------------------------------------------------------------------//





#######################################################################
########################## user login  ######################
//---------------------------------------------------------------------//
if (isset($_POST['userlogin'])) {

$admin_login=$_POST['user_email'];
$admin_password=$_POST['user_pass'];


		if ($admin_login && $admin_password ) {

		$sorgu=$db->prepare("SELECT * from users WHERE user_email=:name and  user_pass=:password");

		$sorgu->execute(array(
			'name'=>$admin_login,
			'password'=>$admin_password
		));

		$say=$sorgu->rowCount();

		if ($say>0) {

		$_SESSION['user_email'] = $admin_login;


$site= "$sitename/userpanel/index.php?login=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/login.php?login=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

}
}
//---------------------------------------------------------------------//
//---------------------------------------------------------------------//


#######################################################################
########################## user update  ######################
//---------------------------------------------------------------------//
if (isset($_POST['accupdate'])) {   		#duyme adi

$save=$db->prepare("UPDATE users SET   	#tablo adi
#sutun adi--> leqebi
	user_name=:a,
	user_email=:b,
	user_birthday=:c

WHERE user_id={$_POST['user_id']}");
$update=$save->execute(array(
 #sutun leqebi --> adi
	'a'=>$_POST['user_name'],
	'b'=>$_POST['user_email'],
	'c'=>$_POST['user_birthday']
	 ));


if($_POST['user_pass'] != null ) {

$save=$db->prepare("UPDATE users SET   	#tablo adi
#sutun adi--> leqebi
	user_name=:a,
	user_email=:b,
	user_birthday=:c,
	user_pass=:d

WHERE user_id={$_POST['user_id']}");
$update=$save->execute(array(
 #sutun leqebi --> adi
	'a'=>$_POST['user_name'],
	'b'=>$_POST['user_email'],
	'c'=>$_POST['user_birthday'],
	'd'=>$_POST['user_pass']

	 ));
}


if($update) {

$site= "$sitename/myaccount.php?change=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

$site= "$sitename/myaccount.php?change=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}
#########################################################################
//---------------------------------------------------------------------//


#######################################################################
##########################  Reset password   ##########################
//-------------------------------------------------------------------//
if (isset($_POST['resetpass'])) {   		#duyme adi

	$user_email=htmlspecialchars(trim($_POST['user_email']));

		if ($user_email) {

		$sorgu=$db->prepare("SELECT * from users WHERE user_email=:xyz ");

		$sorgu->execute(array(
			'xyz'=>$user_email
		));

		$say=$sorgu->rowCount();

if ($say==1) {

$xvalue3=rand(101,999);
$xvalue4=rand(134,999);
$verify_code=$xvalue3.$xvalue4;

$_SESSION['verify_code'] = $verify_code;
$_SESSION['user_email'] = $user_email;

if($verify_code) {

$save=$db->prepare("INSERT verify SET   	#tablo adi
#sutun adi--> leqebi
	verify_code=:a
");
$update=$save->execute(array(
 #sutun leqebi --> adi
	'a'=>$verify_code
	 ));



$site= "$sitename/verify.php?verify=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

} else if($say==0) {

$site= "$sitename/reset-pass.php?verify=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

exit; }
}
}
#########################################################################
//---------------------------------------------------------------------//





#######################################################################
########################## pass change  ######################
//---------------------------------------------------------------------//
if (isset($_POST['passupdate'])) {   		#duyme adi

$save=$db->prepare("UPDATE users SET   	#tablo adi
#sutun adi--> leqebi
	user_pass=:a

WHERE user_id={$_POST['user_chek']}");
$insert=$save->execute(array(
 #sutun leqebi --> adi
	'a'=>$_POST['user_pass']
	 ));

if($insert) {

session_destroy();

$site= "$sitename/login.php?pass=ok";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ;

} else {

session_destroy();

$site= "$sitename/login.php?pass=no";

$meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

$link=  $meta.$site.'">' ;

echo $link ; }

							}
#########################################################################
//---------------------------------------------------------------------//



?>
