<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Welcome to Your Super-Admin Panel</title>

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
                        <li class="active"><a href="<?php echo base_url(); ?>super_admin/homesuperadmin/index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;Settings <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>super_admin/setting_homecontent.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>super_admin/setting_aboutus.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set About Us</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>super_admin/view_homecontent.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View Home Content</a></li>
                                <li><a href="<?php echo base_url(); ?>super_admin/view_aboutus.html"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>&nbsp;View About Us</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url(); ?>home/index.html" target="_blank"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;View Site</a></li>
                        <li><a href="<?php echo base_url(); ?>super_admin_login/logout.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</a></li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="alert alert-success">
                <h4>Welcome,
                    <?php echo $this->session->userdata('first_name'); ?>
                    <?php echo $this->session->userdata('last_name'); ?>
                </h4>
                <h3><font color="green">
              User Type:&nbsp;<?php echo $this->session->userdata('user_type'); ?>
                    </font></h3>
            </div>
            <h3>All User Information</h3>
            <hr>
            <h3>Total number of users:&nbsp;<?php echo count($alluserinfo);?></h3>
            <table class="table table-hover" style="background:yellowgreen;">
                        <thead>
                            <tr class="success">
                            
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>User Status</th>
                                <th>Actions</th>
                                <th></th>
                                <th></th>
                         
                            </tr>
                        </thead>
                        <?php
                        foreach ($alluserinfo as $value) {
                        
                        ?>
                        <tbody>
                        <td><?php echo $value->first_name;?>
                        <?php echo $value->last_name;?></td>
                        <td><?php echo $value->email;?></td>
                        <td><?php echo $value->user_type;?></td>
                        <td><?php
                        if($value->status==1){
                        ?>
                        <div class="label label-success">
                            <strong>Active</strong>
                        </div>
                        <?php
                        } elseif($value->status==0) {
                        ?>
                        <div class="label label-danger">
                            <strong>Inactive</strong>
                        </div>
                        <?php
                        }
                        ?>
                        </td>
                        <td><a href="<?php echo base_url();?>super_admin/editpostinformation/<?php echo $value->user_id;?>">Edit</a></td>
                       
                        
                        <td><a href="<?php echo base_url();?>super_admin/deleteuser/<?php echo $value->user_id;?>">Delete</a></td>
                    
                                          
                        <?php
                        }
                        ?>
                    
                    </tbody>
                            
                    </table>
            
            <br>
            <h3>Delete user post</h3>
            <hr>
            <table class="table table-hover" style="background:yellowgreen;">
                        <thead>
                            <tr class="success">
                            
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Image</th>
                                <th>Actions</th>
                               
                         
                            </tr>
                        </thead>
                        <?php
                        foreach ($deleteuserinfo as $value) {
                        
                        ?>
                        <tbody>
                        <td><?php echo $value->name;?></td>
                        <td><?php echo $value->email;?></td>
                        <td><?php echo $value->phoneNumber;?></td>
                        <td><img src="<?php echo base_url(); ?><?php echo $value->image_path; ?>" height="150" width="200" alt="profile image"><br> <!-- or use h= 150 w=150-->
</td>
                        
                        <td><a href="<?php echo base_url();?>super_admin/deleteuserpostinfo/<?php echo $value->user_id;?>">Delete</a></td>
                    
                        <?php
                        }
                        ?>
                    
                    </tbody>
                            
                    </table>
            

        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>resource/admin_template/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>resource/admin_template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        
    </body>
</html>