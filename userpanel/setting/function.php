<?php
ob_start();
session_start();

/////////////////////
function islemkontrol () {

    if (empty($_SESSION['user_email'])) {

        Header("Location:../../login.php?durum=error");
        exit;
    }
}

////////////////
function seo($s) {
 $az = array('ş','Ş','ə','Ə','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
 $eng = array('s','s','e','e','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $s = str_replace($az,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 return $s;
}

////////////////
function tarix($aaa) {
 $en = array('Jan','Feb','March','Apr','May','jun','jul','Aug','Sep','Oct','Nov','Dec');
 $aze = array('Yanvar','Fevral','Mart','Aptel','May','Iyun','Iyul','Avqust','Sentyabr','Oktyabr','Noyabr','Dekabr');
 $aaa = str_replace($en,$aze,$aaa);
 $aaa = trim($aaa, '-');
 return $aaa;
}
/////////////////////


///////////////////////////////
function autolink($string){
    // force http: on www.
    $string = str_ireplace( "www.", "http://www.", $string );
    // eliminate duplicates after force
    $string = str_ireplace( "http://http://www.", "http://www.", $string );
    $string = str_ireplace( "https://http://www.", "https://www.", $string );

    // The Regular Expression filter
    $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
    // Check if there is a url in the text

$m = preg_match_all($reg_exUrl, $string, $match);

if ($m) {
$links=$match[0];
for ($j=0;$j<$m;$j++) {

    if(substr($links[$j], 0, 19) == 'https://www.youtube'){



////////////////////youtube suppot
$url = $links[$j];
preg_match(
        '/[\\?\\&]v=([^\\?\\&]+)/',
        $url,
        $matches
    );
$id = $matches[1];

$width = '300';
$height = '170';


/////////////////

    $string=str_replace($links[$j],'<a href="'.$links[$j].'" rel="nofollow" target="_blank">'.$links[$j].'</a>',$string).'<br /><object width="' . $width . '" height="' . $height . '"><param name="movie" value="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '"></embed></object>';


    }else{

    $string=str_replace($links[$j],'<a href="'.$links[$j].'" rel="nofollow" target="_blank">'.$links[$j].'</a>',$string);

        }

    }
}

     return ($string);
 }
////////////////////////////////////////////////////////

?>
