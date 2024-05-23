<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Settings &#124; Home Content</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/admin_template/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                padding-top: 70px;
            }
        </style>
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
                        <li class="active"><a href="<?php echo base_url(); ?>user/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;Settings <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>user/setting_homecontent.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>user/setting_aboutus.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set About Us</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>user/view_homecontent.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>user/view_aboutus.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View About Us</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url(); ?>home/index.html" target="_blank"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View Site</a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div class="container">
            <div class="alert alert-success">
                <h4>Set Home Content</h4>
            </div>
            <hr>
            <h3><font color="green">
                <?php
                $message = $this->session->userdata('save_message');
                if (isset($message)) {
                    echo $message;

                    $this->session->unset_userdata('save_message');
                }
                ?>
                </font></h3>
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>homecontent/savehomecontent.html">
                <div class="form-group">
                    <label for="title" class="col-sm-2 text-right">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Enter your title" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-sm-2 text-right">Content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="home_content" placeholder="Enter content" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
            </form>


            <hr>
            <footer>
                <p>&copy; <?php echo date('Y');?> Fionn Ross</p>
            </footer>
        </div> <!-- /container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resource/admin_template/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resource/admin_template/js/bootstrap.min.js"></script>
    </body>
</html>