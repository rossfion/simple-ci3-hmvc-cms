<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <!--The above 3 meta tags *must* come first in the head;
        any other head content must come *after* these tags -->
        <title>User Login</title>

        <!--Bootstrap -->
        <link href = "<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel = "stylesheet">
        <style>
            html{
                display: table;
                margin-left: auto;
                margin-right: auto;

            }
            body{
                padding-top: 70px;
            }
            .container {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
            }
            .form-signin {
                width: 450px;
                vertical-align: middle;
                margin: 0 auto;
            }
        </style>

        <!--HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo base_url(); ?>home/aboutus.html">About Us</a></li>
                        <li><a href="<?php echo base_url(); ?>home/userregistration.html">Sign Up</a></li>
                        <li><a href="<?php echo base_url(); ?>home/userlogin.html">Login</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>User Login</h2>
                    <hr>
                    <h3><font color="red">
                        <?php
                        $message = $this->session->userdata('message');
                        if (isset($message)) {
                            echo $message;

                            $this->session->unset_userdata('message');
                        }
                        ?>
                        </font></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-signin" name="User Login" method="post" action="<?php echo base_url(); ?>login/check_user_login.html/">

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email address" required="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <hr>

            <footer>
                <p>&copy; <?php echo date('Y'); ?> Fionn Ross</p>
            </footer>
        </div> <!-- /container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src = "<?php echo base_url(); ?>resource/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
    </body>
</html>