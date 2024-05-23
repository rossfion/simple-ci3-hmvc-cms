<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Admin Panel &#124; Edit Users</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/admin_template/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html{
                display: table;
                margin-left: auto;
                margin-right: auto;
                
            }
            body {
                padding-top: 70px;
                
            }
            .form_edit {
                width: 560px;
                vertical-align: middle;
                margin: 0 auto;
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
                        <li class="active"><a href="<?php echo base_url(); ?>user/user_admin/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;Settings <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>user/user_admin/setting_homecontent.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>user/user_admin/setting_aboutus.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set About Us</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>user/user_admin/view_homecontent.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>user/user_admin/view_aboutus.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View About Us</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url(); ?>home/index.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View Site</a></li>
                        <li><a href="<?php echo base_url(); ?>user/user_admin/logout.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <form class="form_edit" name="User Information" method="post" action="<?php echo base_url(); ?>super_admin/updateuserinformation.html">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required value="<?php echo $editpostinformation->first_name; ?>">
                    <input type="hidden" class="form-control" name="user_id" value="<?php echo $editpostinformation->user_id; ?>">

                </div>
                
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" value="<?php echo $editpostinformation->last_name; ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address" required value="<?php echo $editpostinformation->email; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter a password">
                </div>
                
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">User Status:&nbsp;</label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>                    
                </div>
                    
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>