<?php
    get_header();
?>

    <!--  -->
    <div class="container sec-gap">
        <div class="all-page">
            <p>You searched for email</p>
            <div class="row">

            <?php 
                if(have_posts()):
                    while(have_posts()):
                        the_post(); ?>
                        <div class="col-lg-3 col-md-6">
                            <?php
                            // search results 
                             get_template_part("template-parts/content","card");
                            ?>
                        </div>
                 <?php  endwhile; 
                  // pagination
                    the_posts_pagination(
                            array(
                                'prev_text' => __('&laquo;', 'webgame'),
                                'next_text' => __('&raquo;', 'webgame'),
                            )
                    );               
                else:
                    //  if no post get
                    get_template_part("template-parts/content","seach-not-found");
                    
                endif;                 
                ?>          </div>
        </div>
    </div>
    <!--  -->


<?php
    get_footer();
?>