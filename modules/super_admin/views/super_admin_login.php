<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Welcome to the Super Admin Panel</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url();?>resource/admin_template/css/bootstrap.min.css" rel="stylesheet">
        <style>
            html{
                display: table;
                margin-left: auto;
                margin-right: auto;
                
            }
            body {
                padding-top: 70px;
                
            }
            .form-signin {
                width: 450px;
                vertical-align: middle;
                margin: 0 auto;
            }
            
        </style>
    </head>
    <body>
        
    <div class="container">
        <div class="alert alert-info">
            Super-Admin Login
        </div>
        <hr>
        <div class="row">

            <form class="form-signin" method="post" action="<?php echo base_url();?>super_admin_login/check_super_admin_login.html">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

        
        </div>
    </div> <!-- /container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resource/admin_template/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>resource/admin_template/js/bootstrap.min.js"></script>
    </body>
</html>