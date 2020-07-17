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
                            <div class="card">
                                <div class="header">
                                    <h4 class="title" style="font-weight: bold;">Sifariş əlavə edirsiniz</h4>
                                </div>
                                <div class="content">
                                    <form role="form" action="setting/engine.php" method="POST" enctype="multipart/form-data">
                                      <input type="hidden" name="order_id">
                                      <input type="hidden" name="order_owner" value="<?php echo $usercek['user_id'] ?>">
                                      <input type="hidden" name="order_sifarisci" value="<?php echo $usercek['user_name'] ?>">

                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Sifariş adı</label>
                                                  <input type="text" required name="order_name" class="form-control border-input"></input>
                                              </div>
                                          </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Söz sayı</label>
                                                    <input type="number" required name="order_value" class="form-control border-input"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Keçərlilik Tarixi</label>
                                                    <input type="date" required name="order_date" class="form-control border-input"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Faylın link</label>
                                                    <input type="text" required name="order_url" class="form-control border-input"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <button style="float: right" class="btn btn-primary" type="submit" name="addorder">Sifariş ver</button>

                                        <div class="clearfix"></div>
                                    </form>
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
<?php include 'script.php'?>
</html>
