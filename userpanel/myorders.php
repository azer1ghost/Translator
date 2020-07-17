<!doctype html>
<html lang="en">

<head>
<?php include 'header.php'?>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">


</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
<?php include 'navbar.php'?>

        </div>

    <div class="main-panel">
		   <?php include 'navnot.php'?>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">


                                 <div class="content">
                                   <div class="col-md-12">
                                       <div class="card card-plain">
                                           <div class="header">
                                               <h4 class="title">Bazarda olan sifarişlərim</h4>
                                           </div>
                                           <a href="addorder.php"><button style="float: right" class="btn btn-primary" name="button">Sifariş ver +</button></a>
                                           <div class="content table-responsive table-full-width">
                                               <table class="table table-hover">
                                                   <thead>
                                                     <th>ID</th>
                                                     <th>Ad</th>
                                                     <th>Sifarişçi</th>
                                                     <th>Söz sayı</th>
                                                     <th>Zaman</th>
                                                     <th></th>
                                                   </thead>
                                                   <tbody>

                                                     <?php $order_owner=$usercek['user_id'];
                                                           $storesor=$db->prepare("SELECT * from store where order_owner=$order_owner order by  order_id ASC");
                                                     	     $storesor->execute();
                                                     while($storecek=$storesor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                       <tr>
                                                         <td><?php echo $storecek['order_id']; ?></td>
                                                         <td><?php echo $storecek['order_name'];?></td>
                                                         <td><?php echo $storecek['order_sifarisci']; ?></td>
                                                         <td><?php echo $storecek['order_value']; ?></td>
                                                         <td><?php echo $storecek['order_date']; ?></td>
                                                         <td>
                                                           <a href="ordersingle.php?order_id=<?php echo $storecek['order_id']; ?>">
                                                              <button class="btn btn" name="button">Aç »</button>
                                                          </a>
                                                         </td>
                                                       </tr>
                                                      <?php } ?>

                                                   </tbody>
                                               </table>

                                           </div>
                                       </div>
                                   </div>


                                </div>
                            </div>
                        </div>


                </div>
            </div>


            <?php include 'footer.php'?>

        </div>
    </div>


</body>

<!--   Core JS Files   -->

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>
	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js'></script>

<?php include 'script.php'?>

</html>
