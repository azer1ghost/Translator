<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		ADMIN PANEL
	</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
    a .hoveref > .alert:hover
    {   
    color: #9bcccb;
    -webkit-transition: color .2s ease-in;
    -moz-transition: color .2s ease-in;
    -o-transition: color .2s ease-in;
    -ms-transition: color .2s ease-in;
    transition: color .2s ease-in;
        
    }
    
.accordion {
	display: block;
	position: relative;
	width: 100%; }

.accordion__title {
	display: block;
	position: relative;
	height: 40px;
	line-height: 40px;
	padding: 0px 50px 0 20px;
	font-size: 1.375em;
	font-weight: 500;
	color: #9400D3;
	border-bottom: 1px solid #eee;
	overflow: hidden;
    background-color: #B0E0E6;
}
.accordion__content {
	display: none;
	position: relative;
	overflow: hidden;
	border: 1px solid #eee;
	border-top: none;
	line-height: 1.65;
	padding: 25px;
	background-color: #F8F8FF;
	font-size: .975em; }

    
    </style>
</head>
<?php include '../header.php' ?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include "../notification.php"?>
                        <h1>Xoş Gəlmisiniz!</h1>
                        <h1 class="page-subhead-line">Buradan siz saytin bütün parametrlərini dəyişə bilərsiniz. </h1>
                        
               <!--/.ROW-->
                <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                           Qısa yollar
                        </div>
                        <div class="panel-body">
                            <div class="row">

<a href="../users/users.php">
	<div class="col-md-3 hoveref">
		<div class="alert alert-info text-center">
			<i class="fa fa-users fa-5x"></i>
			<h3></i></h3> Users
		</div>
	</div>
</a>

<a href="../chat/chats.php">
	<div class="col-md-3 hoveref">
		<div class="alert alert-warning text-center">
			<i class="fa fa-envelope fa-5x"></i>
			<h3></h3> Mesajlar
		</div>
	</div>
</a>

<a href="../blog/blog.php">
	<div class="col-md-3 hoveref">
		<div class="alert alert-success text-center">
			<i class="fa fa-newspaper-o fa-5x"></i>
			<h3></h3> Xəbərlər
		</div>
	</div>
</a>

<a href="../employee/employee.php">
	<div class="col-md-3 hoveref">
		<div class="alert alert-danger text-center">
			<i class="fa fa-suitcase fa-5x"></i>
			<h3></h3> Əməkdaşlar
		</div>
	</div>
</a>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <!--/.ROW-->
                       
<!--/.ROW-->
                <div class="row">
                    <div class="col-md-12">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                           Updates
                        </div>
                        <div class="panel-body">
                            <div class="row">


<div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                    <?php 
                        $blogsor=$db->prepare("SELECT * from updates order by update_id desc ");
                        $blogsor->execute();
                        $number=0; // id sayici
                  while($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)){
                        $number++; //id sayici ++  ?>	
                                   
                                        <h4 class="accordion__title">
                                           <?php echo $blogcek['update_date']." ".$blogcek['update_name']  ?>
                                        </h4>
                                    
                                    
                                        <div class="accordion__content">
                                            <p >
                                            <?php echo $blogcek['update_text'] ?>
                                            </p>
                                        </div>
                                
                      <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <!--/.ROW-->





                    </div>
                </div>
         

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php include '../footer.php' ?>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

    <!-- JQUERY SCRIPTS -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>

<script type="text/javascript">
$("#accordion").accordion();
<?php 
                        $aaa=$db->prepare("SELECT * from updates order by update_id desc limit 1");
                        $aaa->execute();
                        $number=0; // id sayici
                  while($upcek=$aaa->fetch(PDO::FETCH_ASSOC)){
                       ?>	
swal("<?php echo $upcek['update_date'] ?>", "Yeniləməsi", "success");
 $('html, body').animate({
        scrollTop: $("#accordion").offset().top
    }, 2000);

    <?php } ?>
</script>

</body>

</html>