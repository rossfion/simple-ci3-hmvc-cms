<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome to MyCMS</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>home/aboutus.html" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <h4>Show all profiles</h4>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($profiles as $profile) {
                            ?>
                            <div class="col-sm-3">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?><?php echo $profile->image_path; ?>" class="thumbnail" alt="profile image"><br> 
                                <strong>Name:&nbsp;<?php echo $profile->name; ?></strong><br>
                                Email:&nbsp;<?php echo $profile->email; ?><br>
                                Description:&nbsp;<?php echo $profile->description; ?>
                            </div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $view_homecontent->title; ?></h2>
                    <p><?php echo $view_homecontent->home_content; ?></p>
                </div>

            </div>