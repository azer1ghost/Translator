<?
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


$smtpuser=$print['site_smtpuser'];
$smtphost=$print['site_smtphost'];
$smtpport=$print['site_smtpport'];
$smtppass=$print['site_smtppassword'];

	$eposta = $user_email;

	include '../../phpmail/class.phpmailer.php';
	$epostal=$smtpuser;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = false;
	$mail->Host = $smtphost;
	$mail->Port = $smtpport;
	$mail->SMTPSecure = 'tls';
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SetFrom($mail->Username, $adsoyad);
	$mail->AddAddress($epostal, $adsoyad);
	$mail->AddAddress($eposta, $adsoyad);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Şifrə yeniləmə kodu';
	$content = '
	<b>Hörmətli istifadəçi aşağıdakı şifrəni sayta daxil edin</b><br>
	<table align="left" class="tg" style="undefined;table-layout: fixed; width: 535px">
		<tr>
			<td class="tg-031e">Email</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$eposta.'</td>
		</tr>
		<tr>
			<td class="tg-031e">Ad Soyad</td>
			<td class="tg-031e">:</td>
			<td class="tg-031e">'.$verify_code.'</td>
		</tr>
	</table>';

if($mail->Send()) {

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
?>