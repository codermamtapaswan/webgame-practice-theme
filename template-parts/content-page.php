    <div class="container sec-gap">
        <div class="all-page">
            <div class="page-header mb-30">
                <p id="breadcrumbs">
                    <!-- <span><span class="breadcrumb_last" aria-current="page">Privacy Policy</span></span> -->
                </p>
                <div class="h1">
                    <?php the_title();?>
                </div>
                <div class="wg-timeline">
                   <b> updated on : </b> <?php the_modified_date();?>
                </div>
            </div>

            <div class="page-content">
                <div class="col-lg-12 mt-lg-4 mt-3">
                   <?php the_content();?>
                </div>
            </div>
        </div>
    </div>