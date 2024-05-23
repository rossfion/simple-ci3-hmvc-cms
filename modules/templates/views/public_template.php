<?php include "public_includes/public_header.php";?>

        <?php include "public_includes/public_navigation.php";?>

        <div class="container" style="background-color: #fff;">
            <div id="stage" style="margin-top: 24px;">
                <?php
				
                if (isset($page_content)) {
                    echo $page_content;
                    if (!isset($page_url)) {
                        $page_url = 'The-Home-Page';
                    }

                    if ($page_url == "") {
                        require_once 'public_includes/public_homepage_content.php';
                    } elseif ($page_url == "contactus") {
                        // load up a contact form (not available with this app)
                        echo Modules::run('contactus/_draw_form');
                    }
                } elseif (isset($view_file)) {
                    $this->load->view($view_module . '/' . $view_file);
                }
                ?>

            </div>
            <hr>
            <?php include "public_includes/public_footer.php";?>