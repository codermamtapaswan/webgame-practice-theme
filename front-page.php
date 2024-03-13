<?php get_header();?>


    <!-- Section 1 Start-->
    <div class="container sec-gap hero-sec">
        <div class="row">
        <?php
                $sec_1_args = array(
                    "cat"=> 327,
                    "post_type"=>"post",
                    "post_status"=>"plublish",
                    "posts_per_page"=> 8,
                );
                $sec_1_query = new wp_query($sec_1_args);
                if($sec_1_query-> have_posts()):
                    while($sec_1_query-> have_posts()):
                        $sec_1_query->the_post();
                        if($sec_1_query->current_post === 0): 
                        global $post;
                        $category = get_the_category($post->ID); // it will get array 
                        $catName = $category[0]->cat_name; ?>

                         <div class="col-lg-7">
                                <a href="<?php the_permalink();?>" class="wg-card-link">
                                    <div class="wg-overlay-card">
                                        <div class="img-placeholder">
                                            <?php
                                                if(has_post_thumbnail()){
                                                    the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                }
                                            ?>
                                        </div>
                                        <div class="wg-card-content card-p">
                                            <span class="cat-name mb-10"><?= $catName;?></span>
                                            <div class="truncate-2 wg-title h4 mb-10">
                                                <?= the_title();?>
                                            </div>
                                            <div class="wg-timeline">
                                                <span class="d-flex align-items-center">
                                                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                        <g stroke-width="0" />
                                                        <g stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z" />
                                                    </svg> <?php the_author();?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                         </div> 
                                <?php elseif($sec_1_query->current_post >= 1 && $sec_1_query->current_post <= 3) : ?>
                                     <div class="col-lg-5 d-flex">
                                        <div class="wg-card p-10">
                                            <a href="<?php the_permalink();?>" class="wg-card-link border-bottom">
                                                <div class="wg-card-content card-p">
                                                    <div class="truncate-2 wg-title mb-10">
                                                        <?= the_title();?>
                                                    </div>
                                                    <div class="wg-timeline justify-content-between">
                                                        <span class="d-flex align-items-center">
                                                            <svg width="15" height="15" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <g stroke-width="0" />
                                                                <g stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M2 19c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-8H2v8zM19 4h-2V3c0-.6-.4-1-1-1s-1 .4-1 1v1H9V3c0-.6-.4-1-1-1s-1 .4-1 1v1H5C3.3 4 2 5.3 2 7v2h20V7c0-1.7-1.3-3-3-3z" />
                                                            </svg>
                                                            <?= get_the_date('M j, y')?>
                                                        </span>

                                                        <svg width="3" height="3" viewBox="0 0 3 3" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#6c757d" />
                                                        </svg>

                                                        <span>5 min read</span>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                        </div>
                                    </div>
                        <?php  else :?>
                             <div class="col-lg-3 col-md-6">
                                <a href="<?php the_permalink();?>" class="wg-card-link">
                                    <div class="wg-card">
                                        <div class="img-placeholder">
                                            <?php
                                                if(has_post_thumbnail()){
                                                    the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                }
                                            ?>
                                        </div>
                                        <div class="wg-card-content card-p">
                                            <span class="cat-name mb-10"><?= $catName;?></span>
                                            <div class="truncate-2 wg-title mb-10">
                                               <?= the_title();?>
                                            </div>

                                            <div class="wg-timeline justify-content-between">
                                                <span class="d-flex align-items-center">
                                                    <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                        <g stroke-width="0" />
                                                        <g stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z" />
                                                    </svg>
                                                   <?= the_author();?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                      <?php  endif;
                    endwhile;
                    wp_reset_postdata();
                endif; ?>
        </div>
    </div>
    <!-- Section 1 End-->

        <!-- Section 2 Start-->
    <div class="container sec-gap sec-2">
        <div class="sec-title d-flex align-items-center mb-25">
            <div class="h2">Popular Categories</div>
        </div>

        <div class="row pop-cat">
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="wg-auth-card d-flex align-items-center justify-content-between p-20">
                    <a href="#" class="h5 mb-0">Troubleshoot</a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12" fill="white" stroke="black" />
                            <path d="M8.95833 16.0417L16.0417 8.95834" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.95833 8.95834H16.0417V16.0417" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Section 2 End-->

    <!-- Section 3 Start-->
    <div class="container sec-gap sec-4">
        <div class="sec-title d-flex align-items-center mb-25">
            <div class="h2">General</div>
        </div>

        <div class="row">
            <?php
            $sec_3_args = array(
                "cat" => 327,
                "post_type" => "post",
                "post_status" => "publish",
                "posts_per_page" => 5,
            );

            $sec_3_query = new WP_Query($sec_3_args);
            if ($sec_3_query->have_posts()) :
                while ($sec_3_query->have_posts()) :
                    $sec_3_query->the_post();
                    
                    // Retrieve common post information
                    $catName = '';
                    $category = get_the_category($post->ID);
                    if (!empty($category)) {
                        $catName = $category[0]->cat_name;
                    }
                    ?>
                    <?php if ($sec_3_query->current_post === 0) : ?>
                        <div class="col-lg-12">
                            <!-- First Card -->
                            <a href="<?= the_permalink();?>" class="wg-card-link">
                                        <div class="wg-card d-grid">
                                            <div class="img-placeholder">
                                                <?php
                                                    if(has_post_thumbnail()){
                                                        the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                    }
                                                ?>
                                            </div>
                                            <div class="wg-card-content card-p">
                                                <span class="cat-name mb-10"><?= $catName?></span>
                                                <div class="truncate-2 wg-title mb-10">
                                                    <?= the_title();?>
                                                </div>
                                                <p class="description truncate-2"> 
                                                    <?= get_the_excerpt();?>
                                                </p>
                                                <hr>
                                                <div class="wg-timeline justify-content-between">
                                                    <span class="d-flex align-items-center">
                                                        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                            <g stroke-width="0"></g>
                                                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <path
                                                                d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z">
                                                            </path>
                                                        </svg>

                                                        <?= the_author();?>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <svg width="3" height="3" viewBox="0 0 3 3" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#000" fill-opacity=".4"></circle>
                                                        </svg>
                                                        5 min read
                                                    </span>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                        </div>
                    <?php else : ?>
                        <div class="col-lg-3 col-md-6">
                            <!-- Rest of the Cards -->
                            <a href="<?= the_permalink();?>" class="wg-card-link">
                                        <div class="wg-card">
                                            <div class="img-placeholder">
                                                <?php
                                                    if(has_post_thumbnail()){
                                                        the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                    }
                                                ?>
                                            </div>
                                            <div class="wg-card-content card-p">
                                                <span class="cat-name mb-10"><?= $catName;?></span>
                                                <div class="truncate-2 wg-title mb-10">
                                                    <?= the_title();?>
                                                </div>

                                                <div class="wg-timeline justify-content-between">
                                                    <span class="d-flex align-items-center">
                                                        <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                            <g stroke-width="0" />
                                                            <g stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z" />
                                                        </svg>

                                                        <?= the_author();?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <!-- Section 3 End-->

    <!-- Section 4 Start-->
    <div class="container sec-gap sec-5">
        <div class="sec-title d-flex align-items-center mb-25">
            <div class="h2">Troubleshoot</div>
        </div>

        <div class="row">
            <?php
            $sec_4_args = array(
                "cat" => 327,
                "post_type" => "post",
                "post_status" => "publish",
                "posts_per_page" => 5,
            );

            $sec_4_query = new WP_Query($sec_4_args);
            if ($sec_4_query->have_posts()) :
                while ($sec_4_query->have_posts()) :
                    $sec_4_query->the_post();
                    
                    // Retrieve common post information
                    $catName = '';
                    $category = get_the_category($post->ID);
                    if (!empty($category)) {
                        $catName = $category[0]->cat_name;
                    }
                    ?>
                    <!-- Iterate Cards -->
                    <?php if ($sec_4_query->current_post <= 2) : ?>
                        <div class="col-lg-8">
                            <a href="<?= the_permalink();?>" class="wg-card-link">
                                        <div class="wg-card d-grid">
                                            <div class="img-placeholder">
                                                <?php
                                                    if(has_post_thumbnail()){
                                                        the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                    }
                                                ?>
                                            </div>
                                            <div class="wg-card-content card-p">
                                                <span class="cat-name  mb-10"><?=$catName;?></span>
                                                <div class="truncate-2 wg-title mb-10">
                                                    <?php the_title();?>
                                                </div>
                                                <div class="wg-timeline">
                                                    <span class="d-flex align-items-center">
                                                        <svg width="13" height="13" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                            <g stroke-width="0"></g>
                                                            <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <path
                                                                d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z">
                                                            </path>
                                                        </svg>

                                                    <?php the_author();?>
                                                    </span>

                                                    <span class="d-flex align-items-center">
                                                        <svg width="3" height="3" viewBox="0 0 3 3" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#6c757d"></circle>
                                                        </svg>
                                                    <?php the_author();?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                        </div>
                    <?php else : ?>
                        <div class="col-lg-4">
                            <!-- Rest of the Cards -->
                            <a href="<?= the_permalink();?>" class="wg-card-link">
                                            <div class="wg-overlay-card">
                                                <div class="img-placeholder">
                                                    <?php
                                                    if(has_post_thumbnail()){
                                                        the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']);
                                                    }
                                                ?>
                                                </div>

                                                <div class="wg-card-content card-p">
                                                    <div class="truncate-2 wg-title mb-10">
                                                    <?= the_title();?>
                                                    </div>
                                                    <div class="wg-timeline">
                                                        <span class="d-flex align-items-center">
                                                            <svg width="13" height="13" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 28.055 28.055" xml:space="preserve">
                                                                <g stroke-width="0"></g>
                                                                <g stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <path
                                                                    d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z">
                                                                </path>
                                                            </svg>

                                                        <?= the_author();?>
                                                        </span>

                                                        <span class="d-flex align-items-center">
                                                            <svg width="3" height="3" viewBox="0 0 3 3" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="1.5" cy="1.5" r="1.5" fill="#6c757d"></circle>
                                                            </svg>
                                                            <?= get_the_date("M j,Y")?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
    <!-- Section 4 End-->


<?php get_footer();?>















