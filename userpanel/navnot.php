
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">İstifadəçi Hesabı</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
									<p>Bildiriş</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
<?php
$limit=30;
$sql2= "SELECT * from `messages`  where mes_user_id=? order by mes_id DESC ";
$stmt2=$db->prepare($sql2);
$stmt2->execute(array($user_id));
$loop=0;
while($mesajsay=$stmt2->fetch(PDO::FETCH_ASSOC)){ 

$loop++;

if($loop > $limit){
    $fromto=$loop-$limit;
}

else if($loop < $limit){
    $fromto=0;
}

}
    $sql= "SELECT * from `messages`  where mes_user_id=? and mes_owner=0 order by 'mes_id'  ASC limit $fromto,$limit";
    $stmt=$db->prepare($sql);
    $stmt->execute(array($user_id));
while($mesajcek=$stmt->fetch(PDO::FETCH_ASSOC)){

?>    

        <li><a href="message.php"> <?php echo substr(htmlspecialchars($mesajcek['mes_text']),0,25)?>... </a></li>


<?php }?>


                              </ul>
                        </li>
						
                    </ul>

                </div>
            </div>
        </nav>