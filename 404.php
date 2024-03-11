<?php
    get_header();
?>

    <!--  -->
    <div class="container sec-gap">
        <div class="all-page">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-20">
                    <img src="<?php echo webgame_image_path('404.svg');?>" alt="Page not found" class="img-fluid">
                </div>
                <div class="col-lg-8">
                    <div class="h3">This page is not available!</div>
                    <p>The page may no longer exist or may have moved to another web address. Try again to locate what
                        you want
                        using the search bar below.</p>
                    <a href="<?php echo home_url('/'); ?>" class="wg-btn">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!--  -->


<?php
    get_footer();
?>