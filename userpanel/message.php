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
<style>

#messagebox {
  width: 100%;
  max-width: 100%;
  height: 90vh;
  max-height: 80vh;
  background-image: url(assets/img/chat.jpg);
  position: relative;
  overflow: hidden;

}
#input {
  float: left;
  width: 95%;
  height: 64px;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 1000;
  display: block;
  transition: all 0.2s;
}
#input.attached {
  box-shadow: 0 0 0 rgba(0,0,0,0.5);
}
#input input {
  position: absolute;
  top: 8px;
  left: 3px;
  margin: 0;
  border: 0;
  font-size: 1em;
  box-sizing: border-box;
  border-radius: 4px 0 4px 4px;
  padding: 14px 16px;
  width: calc(100% - 14px);
}
#buttonsend {
    position: relative;
    float: right;
    width: 5%;
    margin-top: 10px;
    margin-right:5px;
}
#btn-info{
  
}
.btn-circle {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
#messages {
  width: 100%;
  height: calc(100% - 64px);
  overflow: auto;
  position: relative;
}
#messages.sms .content .name {
  display: none;
}
#messages .message {
  width: 100%;
  position: relative;
  box-sizing: border-box;
}
#messages .message:last-child {
  padding-bottom: 0 !important;
}
#messages .message .sender {
  position: absolute;
  top: 14px;
  display: block;
  width: 48px;
  height: 48px;
  background-size: cover;
  border-radius: 100%;
}
#messages .message.in .sender {
  left: 24px;
}
#messages .message .content {
  display: inline-block;
  max-width: calc(100% - 64px);
  background: #fff;
  box-sizing: border-box;
  position: relative;
  padding: 12px 28px 10px 12px;
  box-shadow: 0 0 32px rgba(0,0,0,0.025);
}
#messages .message .content:before,
#messages .message .content:after {
  content: '';
  position: absolute;
  top: 0;
  border-width: 0;
  border-style: solid;
  box-shadow: 0 0 32px rgba(0,0,0,0.025);
}

#messages .message .content .name,
#messages .message .content .date {
  display: inline-block;
  font-size: 0.8em;
  color: rgba(0,0,0,0.5);
}
#messages .message .content .date {
  padding: 4px 0 0 0;
}
#messages .message.in {
  padding: 20px 0 4px 10px;
}
#messages .message.in .content {
  border-radius: 0 4px 4px 4px;
}
#messages .message.in .content:before {
  border-width: 5px;
  border-color: #fff #fff rgba(0,0,0,0) rgba(0,0,0,0);
  left: -10px;
}
#messages .message.in + .message.in {
  padding-top: 0;
}
#messages .message.in + .message.in .content {
  border-radius: 4px;
}
#messages .message.in + .message.in .content:before,
#messages .message.in + .message.in .content:after {
  display: none;
}
#messages .message.out {
  padding: 20px 10px 4px 0;
  text-align: right;
}
#messages .message.out .content {
  border-radius: 4px 0 4px 4px;
  text-align: left;
}
#messages .message.out .content:after {
  border-width: 5px;
  border-color: #fff rgba(0,0,0,0) rgba(0,0,0,0) #fff;
  right: -10px;
}
#messages .message.out + .message.out {
  padding-top: 0;
}
#messages .message.out + .message.out .content {
  border-radius: 4px;
}
#messages .message.out + .message.out .content:before,
#messages .message.out + .message.out .content:after {
  display: none;
}

</style>
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
                                    <h4 class="title" style="font-weight: bold;">Mesajlar</h4>
                                </div>
                                <div class="content">



           
    <div id="messagebox">
        <div class="sms" id="messages">

            

        </div>

        <form onsubmit="return false" autocomplete="off">
        <input id="mes_user_id" type="hidden" value="<?php echo $user_id ?>"/>
            <input id="mes_date"    type="hidden" value=""/>
            <input id="mes_owner"   type="hidden" value="1"/> 

            <div id="input">
                <input id="mes_text" type="text"/>
            </div> 

            <div id="buttonsend">
                <button   onclick="return chk()" class="btn btn-success btn-circle" />
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                </button>
            </div>

        </form> 

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


<script src="chat/ajax/ajax.js" ></script>
<script src="chat/ajax/jquery-3.3.1.min.js" ></script>


<?php include 'script.php'?>

</html>

<script>
// load message
$(document).ready(function(){
    showMessages();
    function showMessages(){
        $.ajax({
            type:"POST",
            url:"chat/messages.php",
            data:{user_id:"<?php echo $user_id?>"},
            success:function(data){
                $("#messages").html(data);
            }
        });
    }
    setInterval(function() {

    showMessages();
                            }, 1000);

});
</script>


<script>
// mesaj zaman duzenleyeci
setInterval(function() { 
var date = new Date;
var seconds = date.getSeconds();
var minutes = date.getMinutes();
var hour = date.getHours();
   document.getElementById("mes_date").value = hour + ":" + minutes;
}, 1000);
</script>

<script>
// mesaj avto awagi surusme
var height = 1000000;
$("#message").each(function(i, value){
    height += parseInt($(this).height());
});
height += '';
$('#messages').animate({scrollTop: height});
</script>
