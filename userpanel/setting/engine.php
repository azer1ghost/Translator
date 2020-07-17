<?php
ob_start();
session_start();
			//Sesia basladildi *
include '../../admin/setting/connect.php';  //baglanti temin edildi *
include 'function.php';



  #######################################################################
  ########################## order add Parametr  ############################
  //---------------------------------------------------------------------//
  if (isset($_POST['addorder'])) {   			#duyme adi

  $save=$db->prepare("INSERT INTO store SET   	#tablo adi
   #sutun adi--> leqebi
   order_name=:a,
   order_value=:b,
   order_date=:c,
   order_url=:d,
   order_owner=:e,
   order_sifarisci=:g ");
  $insert=$save->execute(array(
   #sutun leqebi --> adi
  	'a'=>$_POST['order_name'],
    'b'=>$_POST['order_value'],
    'c'=>$_POST['order_date'],
    'd'=>$_POST['order_url'],
    'e'=>$_POST['order_owner'],
    'g'=>$_POST['order_sifarisci']
  	 ));
     if($insert) {

     $site= "$sitename/userpanel/myorders.php?durum=add";

     $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

     $link=  $meta.$site.'">' ;

     echo $link ;

     } else {

     $site= "$sitename/userpanel/myorders.php?durum=addfailed";

     $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

     $link=  $meta.$site.'">' ;

     echo $link ; }
     }
  #########################################################################
  //---------------------------------------------------------------------//




  #######################################################################
  ########################## order update ###############################
  //---------------------------------------------------------------------//

  if (isset($_POST['orderupdate'])) {          #duyme adi

  $save=$db->prepare("UPDATE store SET  #tablo adi

   #sutun adi--> leqebi
   order_name=:a,
   order_value=:b,
   order_date=:c,
   order_url=:d,
   order_owner=:e,
   order_sifarisci=:g

  WHERE order_id={$_POST['order_id']}");
  $update=$save->execute(array(

   #sutun leqebi --> adi
   'a'=>$_POST['order_name'],
   'b'=>$_POST['order_value'],
   'c'=>$_POST['order_date'],
   'd'=>$_POST['order_url'],
   'e'=>$_POST['order_owner'],
   'g'=>$_POST['order_sifarisci']

  ));


  if($update) {

  $site= "$sitename/userpanel/myorders.php?durum=save";

  $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

  $link=  $meta.$site.'">' ;

  echo $link ;

  } else {

  $site= "$sitename/userpanel/myorders.php?durum=savefailed";

  $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

  $link=  $meta.$site.'">' ;

  echo $link ; }

  }

  //---------------------------------------------------------------------//






  #########################################################################
  ########################## order delete ##################################
  //---------------------------------------------------------------------//

  if ($_GET['orderdelete']=="ok"){	            #sil duymesinden gelen ad

  	islemkontrol ();

  		$sil=$db->prepare("DELETE from store where order_id=:order_id"); #ne silinecek

  		$kontrol=$sil->execute(array('order_id' => $_GET['order_id']));	#ne silinecek hardan

  	if($kontrol)  {


      $site= "$sitename/userpanel/myorders.php?durum=del";

      $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

      $link=  $meta.$site.'">' ;

      echo $link ;

      } else {

      $site= "$sitename/userpanel/myorders.php?durum=delfailed";

      $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

      $link=  $meta.$site.'">' ;

      echo $link ; }

  }

  #########################################################################
  //---------------------------------------------------------------------//






    #######################################################################
    ########################## takeorder update ###############################
    //---------------------------------------------------------------------//

    if (isset($_POST['takeorder'])) {          #duyme adi

    $save=$db->prepare("UPDATE store SET  #tablo adi

     #sutun adi--> leqebi
     order_gave=:g

    WHERE order_id={$_POST['order_id']}");
    $update=$save->execute(array(

     #sutun leqebi --> adi
     'g'=>$_POST['order_gave']

    ));

       if($update) {

       $site= "$sitename/userpanel/myclients.php?durum=add";

       $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

       $link=  $meta.$site.'">' ;

       echo $link ;

       } else {

       $site= "$sitename/userpanel/myclients.php?durum=addfailed";

       $meta='<meta HTTP-EQUIV="REFRESH" content="0; url=';

       $link=  $meta.$site.'">' ;

       echo $link ; }
       }
    #########################################################################
    //---------------------------------------------------------------------//






?>
