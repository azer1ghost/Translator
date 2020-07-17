<?php include "headerdb.php"?>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $sitename?>/admin/pages/site_options/index.php">Admin Panel</a>
            </div>

            <div class="header-right">

                <a href="../chat/chats.php" class="btn btn-info" title="Yeni mesaj"><b> </b><i class="fa fa-envelope-o "></i></a>
                <a href="../logout.php" class="btn btn-danger" title="Çıxış"><i class="fa fa-sign-out"></i></a>


            </div>

        </nav>

        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <div class="img-logo">
                                <img src="../assets/img/Untitled-1.png" class="imglogo" />
                            </div>
                        </div>
                    </li>

                    <li>
                        <a style="margin-top: 20px" href="<?php echo $sitename?>/admin/pages/site_options/index.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-cog "></i>Parametrlər<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $sitename?>/admin/pages/site_options/parametr.php"><i class="fa fa-plug"></i>Əsas parametrlər</a>
                                <a href="<?php echo $sitename?>/admin/pages/site_options/social.php"><i class="fa fa-share-square-o"></i>Social</a>
                                <a href="<?php echo $sitename?>/admin/pages/site_options/smtp.php"><i class="fa fa-envelope-o"></i>SMTP</a>
                            </li>
                        </ul>
                    </li>
<!--
                    <li>
                       <a href="<?php echo $sitename?>/admin/pages/subjects/subjects.php"><i class="fa fa-file-text"></i>Fənnlər</a>
                    </li>

                     <li>
                        <a href="<?php echo $sitename?>/admin/pages/pages/pages.php"><i class="fa fa-file-text"></i>Səhifələr</a>
                    </li>

                     <li>
                        <a href="<?php echo $sitename?>/admin/pages/price/prices.php"><i class="fa fa-money"></i>Qiymətlər və paketlər</a>
                    </li>

                    <li>
                        <a href="<?php echo $sitename?>/admin/pages/services/services.php"><i class="fa fa-list "></i>Xidmətlər</a>
                    </li>
                <li>
                        <a href="<?php echo $sitename?>/admin/pages/menu/menu.php"><i class="fa fa-bars "></i>Menu-lar</a>
                    </li>

                    <li>
                        <a href="<?php echo $sitename?>/admin/pages/employee/employee.php"><i class="fa fa-users "></i>Əməkdaşlar</a>
                    </li>

                     <li>
                        <a href="<?php echo $sitename?>/admin/pages/users/users.php"><i class="fa fa-users "></i>Users</a>
                    </li>

                     <li>
                        <a href="<?php echo $sitename?>/admin/pages/chat/chats.php"><i class="fa fa-envelope "></i>Chat</a>
                    </li>-->

                </ul>
            </div>

        </nav>
        <!--  NAV SIDE  -->
