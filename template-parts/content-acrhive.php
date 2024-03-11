    <!--  -->
    <div class="container sec-gap">
        <div class="all-page">

            <p id="breadcrumbs">
                <span><span class="breadcrumb_last" aria-current="page">Category</span></span>
            </p>


            <div class="row mb-30">

                <?php
                  if(have_posts()):
                    while(have_posts()):
                      the_post(); 
                      
                      // get_template_part('template-parts','card');
                      
                      endwhile;  ?>

            </div>

            <!-- pagination -->

            <nav class="navigation pagination" aria-label="Posts">
                <!-- <h2 class="screen-reader-text">Posts navigation</h2> -->
                <div class="nav-links">
                    <a class="next page-numbers" href="#">«</a>
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#">»</a>
                </div>
            </nav>

          <?php
            else:
              echo("Sorry! This Category don't have posts Yet.");
            endif;
          ?>


        </div>
    </div>
    <!--  -->