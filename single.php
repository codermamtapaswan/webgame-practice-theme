<?php

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
 }
    get_header();
   
?>



  <div class="container sec-gap">

  <?php
    if(have_posts()):
        while(have_posts()):
          the_post();
        ?>
          <div class="single-page mb-30">

            <div class="feature-box mb-30">

              <p id="breadcrumbs"><a href="#">WebGame</a></span> > <a href="#">Blog</a> > </span href="#">iphone</span></p>
              <h1 class="mb-25"> <?= the_title();?> </h1>
              <hr>

              <div class="auto-grid">
                <div class="wg-timeline">
                  <span class="d-flex align-items-center">
                    <svg width="13" height="13" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.055 28.055"
                      xml:space="preserve">
                      <g stroke-width="0"></g>
                      <g stroke-linecap="round" stroke-linejoin="round"></g>
                      <path
                        d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z">
                      </path>
                    </svg>

                    Alex Smith
                  </span>

                  <span class="d-flex align-items-center">
                    <svg width="3" height="3" viewBox="0 0 3 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="1.5" cy="1.5" r="1.5" fill="#6c757d"></circle>
                    </svg>
                    January 21 , 2024
                  </span>
                </div>
                <div class="wg-timeline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <path
                      d="M7.07885 0.36001C6.54818 0.556377 5.95745 1.00079 5.62703 1.4452L5.3567 1.81726H4.45557C3.37422 1.8276 2.98373 2.0033 2.28285 2.77843C1.70213 3.41921 1.45181 4.18401 1.5219 5.12451C1.57196 5.75495 1.57196 5.75495 1.2015 6.02367C0.530663 6.53009 0 7.60495 0 8.48343C0 9.36192 0.530663 10.4368 1.2015 10.9432C1.57196 11.2119 1.57196 11.2119 1.5219 11.8424C1.45181 12.7829 1.70213 13.5477 2.28285 14.1884C2.98373 14.9636 3.37422 15.1393 4.45557 15.1496H5.3567L5.62703 15.5217C6.19775 16.2968 7.08886 16.7412 8.06007 16.7412C9.03129 16.7412 9.9224 16.2968 10.4931 15.5217L10.7635 15.1496H11.6646C12.7459 15.1393 13.1364 14.9636 13.8373 14.1884C14.418 13.5477 14.6683 12.7829 14.5982 11.8424C14.5482 11.2119 14.5482 11.2119 14.9186 10.9432C15.5895 10.4368 16.1201 9.36192 16.1201 8.48343C16.1201 7.60495 15.5895 6.53009 14.9186 6.02367C14.5482 5.75495 14.5482 5.75495 14.5982 5.12451C14.6683 4.20468 14.428 3.47089 13.8573 2.80944C13.1665 2.01363 12.7559 1.8276 11.6646 1.81726H10.7635L10.4931 1.4452C9.9224 0.670065 9.03129 0.225653 8.06007 0.225653C7.72966 0.225653 7.28911 0.287664 7.07885 0.36001ZM11.5645 5.89965C11.6646 6.01333 11.7447 6.25104 11.7447 6.42674C11.7447 6.69545 11.4543 7.04685 9.55194 9.01052C7.65957 10.9639 7.31915 11.2739 7.05882 11.2739C6.80851 11.2739 6.5582 11.0776 5.56696 10.044C4.56571 9.00019 4.37547 8.75215 4.37547 8.49377C4.37547 8.07003 4.65582 7.75997 5.04631 7.75997C5.30663 7.75997 5.49687 7.90466 6.1577 8.58678C6.59825 9.04153 6.99875 9.41359 7.05882 9.41359C7.1189 9.41359 7.96996 8.57645 8.9612 7.55327C10.5232 5.94099 10.8035 5.69294 11.0738 5.69294C11.2541 5.69294 11.4543 5.77562 11.5645 5.89965Z"
                      fill="#EC1515"></path>
                  </svg>
                  Co-authored by <a href="#" class="aut-name" aria-label="author">Zayn Tindall</a>
                </div>
                <div class="wg-timeline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <path
                      d="M7.07885 0.36001C6.54818 0.556377 5.95745 1.00079 5.62703 1.4452L5.3567 1.81726H4.45557C3.37422 1.8276 2.98373 2.0033 2.28285 2.77843C1.70213 3.41921 1.45181 4.18401 1.5219 5.12451C1.57196 5.75495 1.57196 5.75495 1.2015 6.02367C0.530663 6.53009 0 7.60495 0 8.48343C0 9.36192 0.530663 10.4368 1.2015 10.9432C1.57196 11.2119 1.57196 11.2119 1.5219 11.8424C1.45181 12.7829 1.70213 13.5477 2.28285 14.1884C2.98373 14.9636 3.37422 15.1393 4.45557 15.1496H5.3567L5.62703 15.5217C6.19775 16.2968 7.08886 16.7412 8.06007 16.7412C9.03129 16.7412 9.9224 16.2968 10.4931 15.5217L10.7635 15.1496H11.6646C12.7459 15.1393 13.1364 14.9636 13.8373 14.1884C14.418 13.5477 14.6683 12.7829 14.5982 11.8424C14.5482 11.2119 14.5482 11.2119 14.9186 10.9432C15.5895 10.4368 16.1201 9.36192 16.1201 8.48343C16.1201 7.60495 15.5895 6.53009 14.9186 6.02367C14.5482 5.75495 14.5482 5.75495 14.5982 5.12451C14.6683 4.20468 14.428 3.47089 13.8573 2.80944C13.1665 2.01363 12.7559 1.8276 11.6646 1.81726H10.7635L10.4931 1.4452C9.9224 0.670065 9.03129 0.225653 8.06007 0.225653C7.72966 0.225653 7.28911 0.287664 7.07885 0.36001ZM11.5645 5.89965C11.6646 6.01333 11.7447 6.25104 11.7447 6.42674C11.7447 6.69545 11.4543 7.04685 9.55194 9.01052C7.65957 10.9639 7.31915 11.2739 7.05882 11.2739C6.80851 11.2739 6.5582 11.0776 5.56696 10.044C4.56571 9.00019 4.37547 8.75215 4.37547 8.49377C4.37547 8.07003 4.65582 7.75997 5.04631 7.75997C5.30663 7.75997 5.49687 7.90466 6.1577 8.58678C6.59825 9.04153 6.99875 9.41359 7.05882 9.41359C7.1189 9.41359 7.96996 8.57645 8.9612 7.55327C10.5232 5.94099 10.8035 5.69294 11.0738 5.69294C11.2541 5.69294 11.4543 5.77562 11.5645 5.89965Z"
                      fill="#EC1515"></path>
                  </svg>
                  Fact checked by <a href="#" class="aut-name" aria-label="author">Manpreet Kaur Sandhu</a>
                </div>
              </div>
   

            </div>


            <div class="row">
              <div class="col-lg-9">
                <div class="toc-wrap mb-30">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="toc-title">
                      Table of content
                    </div>
                    <div class="opne-close-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        viewBox="0 0 20 20" fill="none">
                        <path d="m5 7.5 5 5 5-5" stroke="#000" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                        </path>
                      </svg></div>
                  </div>

                  <div class="toc">
                    <ol class="toc-list">
                      <li class="toc-list-item"><a href="#hey" class="toc-link">Why Wont My PS4 Turn On?</a></li>
                      <li class="toc-list-item"><a href="#why" class="toc-link">How To Fix a PS4 That Won't Turn On? (12
                          Effective Solutions)</a></li>
                      <li class="toc-list-item"><a href="#get" class="toc-link">Conduct Power Insert Game Disc Insert Game
                          Disc
                          Insert Game Disc Cycling</a></li>
                      <li class="toc-list-item"><a href="#4" class="toc-link">Insert Game Disc Insert Game Disc Insert Game
                          Disc</a></li>
                      <li class="toc-list-item"><a href="#5" class="toc-link">Try Another Outlet Insert Game Disc Insert Game
                          Disc</a></li>
                      <li class="toc-list-item"><a href="#6" class="toc-link">Replace the Power Insert Game Disc Cord</a></li>
                      <li class="toc-list-item"><a href="#7" class="toc-link">Disconnect the Insert Game Disc Power Cable</a>
                      </li>
                    </ol>
                  </div>
                </div>

                <div class="content">
                  <?= the_content(); ?>
                </div> <!--End Single Content  -->
              </div>

              <div class="col-lg-3">
                <div class="sidebar">
                  <?php get_sidebar();?>
                </div>
              </div>

            </div>

          </div>

        <?php 
      endwhile;
    endif;
  ?>

    


    <!-- Related Post -->
    <div class="sec-title d-flex align-items-center mb-25">
      <div class="h2">Related Post</div>
    </div>

    <div class="row">

    <?php
      $current_categories = get_the_category();

    ?>

      <div class="col-lg-3 col-md-6">
        <a href="#" class="wg-card-link">
          <div class="wg-card">
            <div class="img-placeholder">
              <img src="https://www.waybinary.com/wp-content/uploads/2023/02/gain-instagram-followers.webp"
                class="img-fluid" alt="">
            </div>
            <div class="wg-card-content card-p">
              <span class="cat-name mb-10">Internet</span>
              <div class="truncate-2 wg-title mb-10">
                OnlyFans Statistics Explained In Detail: Building A Strong Understanding
              </div>

              <div class="wg-timeline justify-content-between">
                <span class="d-flex align-items-center">
                  <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.055 28.055"
                    xml:space="preserve">
                    <g stroke-width="0" />
                    <g stroke-linecap="round" stroke-linejoin="round" />
                    <path
                      d="M14.249 1.027c-.036 0-.07.009-.104.009-.106-.003-.211-.01-.318-.009h.422zm-.164 16.274c-.019 0-.036-.003-.055-.003-.014 0-.027.003-.041.003h.096zm-5.948-5.988c.015-.003.026-.019.042-.023.941 3.405 3.377 5.953 5.852 6.007 2.254-.104 5.022-2.606 5.944-5.994.424.026.848-.474.967-1.17.123-.726-.135-1.374-.572-1.449-.028-.005-.057.013-.084.014-.127-5.603-2.789-7.579-6.141-7.664-3.457.017-6.552 2.419-6.356 7.666-.033 0-.064-.021-.096-.015-.439.075-.695.723-.572 1.449.12.724.576 1.252 1.016 1.179zm10.551 6.957-3.141 6.146-.496-3.997.775-.636h-3.595l.776.636-.497 3.997-3.137-6.146C3.917 19.005 0 21.343 0 27.027h28.055c.002-5.685-3.914-8.021-9.367-8.757z" />
                  </svg>

                  Alex Smith
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>

    </div>

  </div>


<?php
    get_footer();
?>