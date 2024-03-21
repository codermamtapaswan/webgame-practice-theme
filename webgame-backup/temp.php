<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package themoneyflow
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
?>

<!-- ========= Main Content Start ========= -->

<!-- Start Hero Section -->
<?php
  // Get total post in category
  $latest_count = wp_count_posts();
  if ($latest_count->publish > 0):
?>
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-5 order-lg-1 order-md-2 order-sm-2 order-xs-2">
        <div class="latest-blog mb-md-0 mb-4">
          <div class="latest-blog-title d-flex align-items-center justify-content-between">
            <span>latest blogs</span>
            <span><i class="fa-solid fa-circle-right"></i></span>
          </div>
          <div class="latest-post-list">

            <?php
              $l_col = 1;
              $args = array(
				 'cat'=> 92,
                'post_type' => 'post',
                'posts_per_page' => 7,
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $query = new WP_Query($args);

              if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
                  $permalink = get_the_permalink();
                  $post_date = get_the_modified_date('F j, Y');
                  $title = wp_trim_words(get_the_title(), 10);

                  if ($l_col <= 3) {
            ?>
                    <div class="post-box">
                      <div class="time-box">
                        <span class="time-icon"><i class="fa-solid fa-clock"></i></span>
                        <span class="time">
                          <?php echo get_post_publish_ago(); ?>
                        </span>
                      </div>

                      <div class="post">
                        <div class="post-image ank-img-placeholder">
                          <a href="<?php echo $permalink; ?>">
                            <?php
                              if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                              }
                            ?>
                          </a>
                        </div>
                        <div class="post-content">
                          <div class="post-title">
                            <a href="<?php echo $permalink; ?>">
                              <?php echo $title; ?>
                            </a>
                          </div>
                          <div class="post-meta">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                              <span><i class="fa-solid fa-user-tag me-2"></i></span>
                              <?php echo get_the_author(); ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
            <?php
              } else if ($l_col === 4) {
            ?>
                </div></div></div>
                <div class="col-lg-6 col-md-12 mb-4 order-lg-2 order-md-1 order-sm-1 order-xs-1">
                  <div class="post hero-main">
                    <div class="post-image ank-img-placeholder">
                      <a href="<?php echo $permalink; ?>">
                        <?php
                          if (has_post_thumbnail()) {
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                          }
                        ?>
                      </a>
                    </div>
                    <div class="post-content">
                      <div class="post-title">
                        <a href="<?php echo $permalink; ?>">
                          <?php echo $title; ?>
                        </a>
                      </div>
                      <div class="post-description">
                        <p>
                          <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </p>
                      </div>
                      <div class="post-meta">
                        <hr />
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                          <span><i class="fa-solid fa-user-tag me-2"></i></span>
                          <?php echo get_the_author(); ?>
                        </a>
                        <span class="mx-2">|</span>
                        <span class="time">
                          <?php echo get_post_publish_ago(); ?>
                        </span>
						<span class="mx-2">|</span>
						  
						<span>
							<?php
								global $post;
								$categories = get_the_category($post->ID);
								$cat_link = get_category_link($categories[0]->cat_ID);
                            ?>
							<a href="<?php echo $cat_link; ?>" class="tag">
							  <span><i class="fa-solid fa-tags me-2"></i></span>
							  <?php echo $categories[0]->cat_name; ?>
							</a>
						 </span>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
                  } else if ($l_col === 5) {
                    ?>
                        <div class="col-lg-3 col-md-7 order-lg-3 order-md-3 order-sm-3 order-xs-3">
                            <div class="home-right-section">
                              <!-- single right post -->
                              <div class="post">
                                <div class="post-image ank-img-placeholder">
                                  <a href="<?php echo $permalink; ?>">
                                    <?php
                                      if (has_post_thumbnail()) {
                                        $thumbnail_id = get_post_thumbnail_id();
                                        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                        the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                                      }
                                    ?>
                                  </a>
                                </div>
                              <div class="post-content">
                                <div class="post-title">
                                  <a href="<?php echo $permalink; ?>">
                                    <?php echo $title; ?>
                                  </a>
                                </div>
                                <div class="post-meta">
                                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                    <span><i class="fa-solid fa-user-tag me-2"></i></span>
                                    <?php echo get_the_author(); ?>
                                  </a>
                                </div>
                              </div>
                            </div>
                    <?php 
                  } else {
                      if ($l_col === 6) {
                          ?>
                              <!--related post  -->
                              <div class="related-post">
                                <div class="title d-flex align-items-top">
                                  <span class="dots-border"></span>
                                </div>
                                <div class="related-post-list">
                          <?php
                      } 
                    ?>
                        <div class="post">
                          <div class="post-content">
                            <div class="post-title">
                              <a href="<?php echo $permalink; ?>">
                                <?php echo $title; ?>
                              </a>
                            </div>
                            <div class="post-meta">
                              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                <span><i class="fa-solid fa-user-tag me-2"></i></span>
                                <?php echo get_the_author(); ?>
                              </a>
                            </div>
                          </div>
                        </div>
                    <?php
                  }
                  $l_col++;
                }
                wp_reset_postdata();
              }
            if ($query->post_count <= 3) echo '</div></div></div>';
            if ($query->post_count <= 7) echo '</div></div>';
            ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- End Hero Section -->

<main id="main">
  <!-- Investopedia For Advisors -->
  <section id="investopedia-advisors" class="investopedia-advisors p40">
    <div class="container">
      <div class="section-header d-flex align-items-center">
        <div class="dot-line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt=""
            class="img-fluid" />
        </div>
        <div class="title text-center w-100 white-space px-3 me-0">
          Finance Calculators
        </div>
        <div class="dot-line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt=""
            class="img-fluid" />
        </div>
      </div>

      <div class="advisor-boxes">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="box">
              <div class="ribbon">
                <img src="https://themoneyflow.net/wp-content/uploads/2023/07/Credit-Card-Calculator-1.png" alt=""
                  class="img-fluid" />
              </div>
              <div class="box-content">
                <div class="title">Credit Card Calculator</div>
                <div class="description mb-3">
                  Calculate the percentage of a borrower’s total available credit that is in use at the moment.
                </div>
                <a href="https://themoneyflow.net/credit-card-calculator/" class="cal-btn d-flex align-items-center">
					<span>Check Now</span>
							<svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">  <path d="M8.00937 8.53123L3.75937 12.7812C3.46562 13.075 2.99062 13.075 2.7 12.7812L1.99375 12.075C1.7 11.7812 1.7 11.3062 1.99375 11.0156L5.00625 8.0031L1.99375 4.9906C1.7 4.69685 1.7 4.22185 1.99375 3.93123L2.69687 3.21873C2.99062 2.92498 3.46562 2.92498 3.75625 3.21873L8.00625 7.46873C8.30312 7.76248 8.30312 8.23748 8.00937 8.53123ZM14.0094 7.46873L9.75937 3.21873C9.46562 2.92498 8.99062 2.92498 8.7 3.21873L7.99375 3.92498C7.7 4.21873 7.7 4.69373 7.99375 4.98435L11.0062 7.99685L7.99375 11.0093C7.7 11.3031 7.7 11.7781 7.99375 12.0687L8.7 12.775C8.99375 13.0687 9.46875 13.0687 9.75937 12.775L14.0094 8.52497C14.3031 8.23747 14.3031 7.76248 14.0094 7.46873Z" fill="white"/></svg>

				  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mt-md-4 mb-4">
            <div class="box">
              <div class="ribbon">
                <img src="https://themoneyflow.net/wp-content/uploads/2023/08/Student-loan-calculator-img.png" alt=""
                  class="img-fluid" />
              </div>
              <div class="box-content">
                <div class="title">Student Loan Calculator</div>
                <div class="description mb-3">
                  With a loan calculator, you will be able to figure out your monthly payments on different types of loans.
                </div>
                <a href="https://themoneyflow.net/student-loan-calculator/" class="cal-btn d-flex align-items-center">
					<span>Check Now</span>
							<svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">  <path d="M8.00937 8.53123L3.75937 12.7812C3.46562 13.075 2.99062 13.075 2.7 12.7812L1.99375 12.075C1.7 11.7812 1.7 11.3062 1.99375 11.0156L5.00625 8.0031L1.99375 4.9906C1.7 4.69685 1.7 4.22185 1.99375 3.93123L2.69687 3.21873C2.99062 2.92498 3.46562 2.92498 3.75625 3.21873L8.00625 7.46873C8.30312 7.76248 8.30312 8.23748 8.00937 8.53123ZM14.0094 7.46873L9.75937 3.21873C9.46562 2.92498 8.99062 2.92498 8.7 3.21873L7.99375 3.92498C7.7 4.21873 7.7 4.69373 7.99375 4.98435L11.0062 7.99685L7.99375 11.0093C7.7 11.3031 7.7 11.7781 7.99375 12.0687L8.7 12.775C8.99375 13.0687 9.46875 13.0687 9.75937 12.775L14.0094 8.52497C14.3031 8.23747 14.3031 7.76248 14.0094 7.46873Z" fill="white"/></svg>

				  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="box">
              <div class="ribbon">
                <img src="https://themoneyflow.net/wp-content/uploads/2023/07/Personal-Loan-Calculator-1.png" alt=""
                  class="img-fluid" />
              </div>
              <div class="box-content">
                <div class="title">Personal Loan Calculator</div>
                <div class="description mb-3">
                  Calculate your monthly EMI amount with our personal loan calculator.
                </div>
                <a href="https://themoneyflow.net/personal-loan-calculator/" class="cal-btn d-flex align-items-center">
					<span>Check Now</span>
							<svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">  <path d="M8.00937 8.53123L3.75937 12.7812C3.46562 13.075 2.99062 13.075 2.7 12.7812L1.99375 12.075C1.7 11.7812 1.7 11.3062 1.99375 11.0156L5.00625 8.0031L1.99375 4.9906C1.7 4.69685 1.7 4.22185 1.99375 3.93123L2.69687 3.21873C2.99062 2.92498 3.46562 2.92498 3.75625 3.21873L8.00625 7.46873C8.30312 7.76248 8.30312 8.23748 8.00937 8.53123ZM14.0094 7.46873L9.75937 3.21873C9.46562 2.92498 8.99062 2.92498 8.7 3.21873L7.99375 3.92498C7.7 4.21873 7.7 4.69373 7.99375 4.98435L11.0062 7.99685L7.99375 11.0093C7.7 11.3031 7.7 11.7781 7.99375 12.0687L8.7 12.775C8.99375 13.0687 9.46875 13.0687 9.75937 12.775L14.0094 8.52497C14.3031 8.23747 14.3031 7.76248 14.0094 7.46873Z" fill="white"/></svg>

				  </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mt-4">
            <div class="box">
              <div class="ribbon">
                <img src="https://themoneyflow.net/wp-content/uploads/2023/08/Investment-Calculator-img.png" alt=""
                  class="img-fluid" />
              </div>
              <div class="box-content">
                <div class="title">Investment Calculator</div>
                <div class="description mb-3">
                  With an investment calculator, one can determine the amount of savings that can be worth investing in and the time period it may last till.
                </div>
                <a href="https://themoneyflow.net/investment-calculator/" class="cal-btn d-flex align-items-center">
					<span>Check Now</span>
							<svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">  <path d="M8.00937 8.53123L3.75937 12.7812C3.46562 13.075 2.99062 13.075 2.7 12.7812L1.99375 12.075C1.7 11.7812 1.7 11.3062 1.99375 11.0156L5.00625 8.0031L1.99375 4.9906C1.7 4.69685 1.7 4.22185 1.99375 3.93123L2.69687 3.21873C2.99062 2.92498 3.46562 2.92498 3.75625 3.21873L8.00625 7.46873C8.30312 7.76248 8.30312 8.23748 8.00937 8.53123ZM14.0094 7.46873L9.75937 3.21873C9.46562 2.92498 8.99062 2.92498 8.7 3.21873L7.99375 3.92498C7.7 4.21873 7.7 4.69373 7.99375 4.98435L11.0062 7.99685L7.99375 11.0093C7.7 11.3031 7.7 11.7781 7.99375 12.0687L8.7 12.775C8.99375 13.0687 9.46875 13.0687 9.75937 12.775L14.0094 8.52497C14.3031 8.23747 14.3031 7.76248 14.0094 7.46873Z" fill="white"/></svg>

				  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Investopedia For Advisors -->

  <!-- Start News & Analysis -->
  <?php
  // Get total post in category
  $news_analysis = count_cat_post(20);
  if ($news_analysis > 0):
    ?>
    <section id="news-analysis" class="news-analysis">
      <div class="container" data-aos="fade-up">
        <div class="section-header d-flex align-items-center">
          <div class="title">Wallet</div>
          <div class="dot-line">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt="" class="img-fluid" />
          </div>
        </div>
        <div class="news-posts">
          <div class="row">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 8,
              'orderby' => 'date',
              'order' => 'DESC',
              'cat' => 20,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                $permalink = get_the_permalink();
                $title = wp_trim_words(get_the_title(), 10);
                  ?>
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="post">
                      <div class="post-image ank-img-placeholder">
                        <a href="<?php echo $permalink; ?>">
                          <?php
                          if (has_post_thumbnail()) {
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                          }
                          ?>
                        </a>
                      </div>
                      <div class="post-content">
                        <?php
                        global $post;
                        $categories = get_the_category($post->ID);
                        $cat_link = get_category_link($categories[0]->cat_ID);
                        ?>
                        <a href="<?php echo $cat_link; ?>" class="tag">
                          <span><i class="fa-solid fa-tags me-2"></i></span>
                          <?php echo $categories[0]->cat_name; ?>
                        </a>
                        <div class="post-title mt-2">
                          <a href="<?php echo $permalink; ?>">
                            <?php echo $title; ?>
                          </a>
                        </div>
                        <div class="post-meta mt-2">
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                            <span><i class="fa-solid fa-user-tag me-2"></i></span>
                            <?php echo get_the_author(); ?>
                          </a>
                          <span class="mx-2">|</span>
                          <span class="time">
                            <?php echo get_post_publish_ago(); ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
              }
              wp_reset_postdata();
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- News & Analysis -->

  <!-- Trending Stocks -->
  <?php
  // Get total post in category
  $trending_analysis = count_cat_post(39);
  if ($trending_analysis > 0):
    ?>
    <section id="trending-stocks" class="trending-stocks">
      <div class="container">
        <div class="section-header d-flex align-items-center">
          <div class="title">Business</div>
          <div class="dot-line">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt="" class="img-fluid" />
          </div>
        </div>

        <div class="trending-posts">
          <div class="row mb-0">
            <?php
            $trend_col = 1;
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC',
              'cat' => 39,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                $permalink = get_the_permalink();
                $post_date = get_the_modified_date('F j, Y');
                $title = wp_trim_words(get_the_title(), 10);
                $author = get_the_author();

                if ($trend_col === 1) {
                  ?>
                  <div class="col-lg-4 col-md-12 mb-4">
                    <div class="big-post">
                      <div class="post">
                        <div class="post-image ank-img-placeholder">
                          <a href="<?php echo $permalink; ?>">
                            <?php
                            if (has_post_thumbnail()) {
                              $thumbnail_id = get_post_thumbnail_id();
                              $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                              the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                            }
                            ?>
                          </a>
                        </div>
                        <div class="post-content">
                          <div class="post-title">
                            <a href="<?php echo $permalink; ?>">
                              <?php echo $title; ?>
                            </a>
                          </div>
                          <div class="post-description">
                            <p>
                              <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                            </p>
                          </div>
                          <div class="post-meta">
                            <div class="post-meta d-flex align-items-center">
                              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                                <span class="ms-2">
                                  <strong>
                                    <?php echo $author; ?>
                                  </strong>
                                </span>
                              </a>
                              <span class="mx-2">-</span>
                              <span class="time">
                                <?php echo get_the_modified_date('F j, Y'); ?>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                } else {
                  if ($trend_col === 2)
                    echo ' <div class="col-lg-8 col-md-12"><div class="row">';
                  if ($trend_col !== 5) {
                    ?>
                    <div class="col-md-4 trending-short-post mb-4">
                      <div class="post">
                        <div class="post-image ank-img-placeholder">
                          <a href="<?php echo $permalink; ?>">
                            <?php
                            if (has_post_thumbnail()) {
                              $thumbnail_id = get_post_thumbnail_id();
                              $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                              the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                            }
                            ?>
                          </a>
                        </div>
                        <div class="post-content">
                          <div class="post-title">
                            <a href="<?php echo $permalink; ?>">
                              <?php echo $title; ?>
                            </a>
                          </div>
                          <div class="post-meta">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                              <span><i class="fa-solid fa-user-tag me-2"></i></span>
                              <?php echo $author; ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                  } else {
                    ?>
                    <div class="col-md-12">
                      <div class="trending-big-post">
                        <div class="post d-flex flex-md-row flex-column flex-column-reverse">
                          <div class="post-image">
                            <a href="<?php echo $permalink; ?>">
                              <?php
                              if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                              }
                              ?>
                            </a>
                          </div>
                          <div class="post-content">
                            <div class="post-title">
                              <a href="<?php echo $permalink; ?>">
                                <?php echo $title; ?>
                              </a>
                            </div>
                            <div class="post-description">
                              <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                              </p>
                            </div>
                            <div class="post-meta">
                              <div class="post-meta d-flex align-items-center">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                  <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                                  <span class="ms-2">
                                    <strong>
                                      <?php echo $author; ?>
                                    </strong>
                                  </span>
                                </a>
                                <span class="mx-2">-</span>
                                <span class="time">
                                  <?php echo get_the_modified_date('F j, Y'); ?>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  }
                }
                $trend_col++;
              }
              wp_reset_postdata();
            }
            ?>
      </div>
      </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- End Trending Stocks -->

  <!-- Start recent posts -->
  <?php
  // Get total post in category
  $recent_posts = count_cat_post(30);
  if ($recent_posts > 0):
    ?>
    <section id="recent-posts" class="recent-posts">
      <div class="container">
        <div class="">
          <div class="section-header d-flex align-items-center">
            <div class="title">Investing</div>
            <div class="dot-line">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
        <?php
        $r_row = 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC',
          'cat' => 30,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $permalink = get_the_permalink();
            $title = wp_trim_words(get_the_title(), 9);
            $author = get_the_author();

            if ($r_row === 1) {
              ?>
              <div class="recent-posts mb-4">
                <div class="row">
                  <div class="col-lg-9 col-md-6 mb-md-0 mb-4">
                    <div class="trending-big-post">
                      <div class="post d-flex flex-lg-row flex-column flex-column-reverse">
                        <div class="post-content align-content-center d-flex flex-column justify-content-center">
                          <div class="post-title">
                            <a href="<?php echo $permalink; ?>">
                              <?php echo $title; ?>
                            </a>
                          </div>
                          <div class="post-description">
                            <p>
                              <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                            </p>
                          </div>
                          <div class="post-meta d-flex align-items-center">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                              <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                              <span class="ms-2">
                                <strong>
                                  <?php echo $author; ?>
                                </strong>
                              </span>
                            </a>
                            <span class="mx-2">-</span>
                            <span class="time">
                              <?php echo get_the_modified_date('F j, Y'); ?>
                            </span>
                          </div>
                        </div>
                        <div class="post-image ank-img-placeholder">
                          <a href="<?php echo $permalink; ?>">
                            <?php
                            if (has_post_thumbnail()) {
                              $thumbnail_id = get_post_thumbnail_id();
                              $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                              the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                            }
                            ?>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
            } else if ($r_row === 2) {
              ?>
                    <div class="col-lg-3 col-md-6">
                      <div class="recent-short-post">
                        <div class="post d-flex flex-row flex-column flex-column-reverse">
                          <div class="post-content">
                            <div class="post-title">
                              <a href="<?php echo $permalink; ?>">
                              <?php echo $title; ?>
                              </a>
                            </div>
                            <div class="post-meta">
                              <i class="fa-solid fa-calendar-days"></i>
                              <span class="time ms-2">
                              <?php echo get_the_modified_date('F j, Y'); ?>
                              </span>
                            </div>
                          </div>
                          <div class="post-image ank-img-placeholder">
                            <a href="<?php echo $permalink; ?>">
                              <?php
                              if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id();
                                $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                              }
                              ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
            } else {
              if ($r_row === 3)
                echo '</div></div><div class="recent-quote-post"><div class="row">';
              ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="post">
                        <div class="post-content">
                          <div class="post-title">
                            <i class="fa-solid fa-quote-left fs-4" style="color: var(--color-primary)"></i>
                            <a href="<?php echo $permalink; ?>" class="ms-3">
                            <?php echo $title; ?>
                            </a>
                          </div>
                          <div class="post-meta d-flex align-items-center">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                            <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                              <span class="ms-2">
                                <strong>
                                <?php echo $author; ?>
                                </strong>
                              </span>
                            </a>
                            <span class="mx-2">-</span>
                            <span class="time">
                            <?php echo get_the_modified_date('F j, Y'); ?>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
            }
            $r_row++;
          }
          wp_reset_postdata();
        }
        if ($query->found_posts <= 2)
          echo '</div></div>';
        ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- End recent posts -->

  <!-- Start Top Stories -->
  <?php
  // Get total post in category
  $top_stories = count_cat_post(24);
  $general = count_cat_post(732);
  if ($top_stories > 0 && $general > 0):
    ?>
    <section id="top-stories" class="top-stories">
      <div class="container">
        <div class="row">
          <?php if ($top_stories > 0 && $general > 0): ?>
            <div class="col-lg-8 col-md-12 mb-5">
              <div class="section-header d-flex align-items-center">
                <div class="title">Top Stories</div>
                <div class="dot-line" style="width: 70%">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title-line.png" alt="" class="img-fluid" />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 col-md-12">
                  <div class="top-left-posts">
                    <div class="row">
                      <?php
                      $top_row = 1;
                      $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'cat' => 734,
                      );
                      $query = new WP_Query($args);

                      if ($query->have_posts()) {
                        while ($query->have_posts()) {
                          $query->the_post();
                          $permalink = get_the_permalink();
                          $title = wp_trim_words(get_the_title(), 15);
                          $author = get_the_author();

                          if ($top_row === 1) {
                            ?>
                            <div class="col-lg-12 col-md-12 mb-4">
                              <div class="post overlay">
                                <div class="post-image ank-img-placeholder w-100">
                                  <a href="<?php echo $permalink; ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                      $thumbnail_id = get_post_thumbnail_id();
                                      $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                      the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                                    }
                                    ?>
                                  </a>
                                  <div class="post-content">
                                    <div class="post-title mb-3">
                                      <a href="<?php echo $permalink; ?>">
                                        <?php echo $title; ?>
                                      </a>
                                    </div>
                                    <div class="post-meta">
                                      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <i class="fa-solid fa-user-tag"></i>
                                        <span class="time ms-2">
                                          <?php echo $author; ?>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                          } else if ($top_row === 2 || $top_row === 3) {
                            ?>
                              <div class="col-lg-12 col-md-6">
                                <div class="post post-flex d-flex align-items-center justify-content-between mb-4">
                                  <div class="post-image post-img-h">
                                    <a href="<?php echo $permalink; ?>">
                                      <?php
                                      if (has_post_thumbnail()) {
                                        $thumbnail_id = get_post_thumbnail_id();
                                        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                        the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                                      }
                                      ?>
                                    </a>
                                  </div>
                                  <div class="post-content">
                                    <?php
                                    global $post;
                                    $categories = get_the_category($post->ID);
                                    $cat_link = get_category_link($categories[0]->cat_ID);
                                    ?>
                                    <a href="<?php echo $cat_link; ?>" class="tag">
                                      <span><i class="fa-solid fa-tags me-2"></i></span>
                                      <span>
                                      <?php echo $categories[0]->cat_name; ?>
                                      </span>
                                    </a>
                                    <div class="post-title">
                                      <a href="<?php echo $permalink; ?>">
                                      <?php echo $title; ?>
                                      </a>
                                    </div>
                                    <div class="post-meta">
                                      <i class="fa-solid fa-calendar-days"></i>
                                      <span class="time ms-2">
                                      <?php echo get_the_modified_date('F j, Y'); ?>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php
                          } else {
                            if ($top_row === 4)
                              echo '</div></div></div><div class="col-lg-4 col-md-12">
              <div class="recent-short-post">
                <div class="row">';
                            ?>
                              <div class="col-lg-12 col-md-6">
                                <div class="post mb-4">
                                  <div>
                                    <div class="post-image ank-img-placeholder">
                                      <a href="<?php echo $permalink; ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                          $thumbnail_id = get_post_thumbnail_id();
                                          $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                          the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                                        }
                                        ?>
                                      </a>
                                    </div>

                                    <div class="post-content">
                                      <div class="post-title">
                                        <a href="<?php echo $permalink; ?>">
                                        <?php echo $title; ?>
                                        </a>
                                      </div>
                                      <div class="post-meta">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="time ms-2">
                                        <?php echo get_the_modified_date('F j, Y'); ?>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php
                          }
                          $top_row++;
                        }
                        wp_reset_postdata();
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          endif;
          if ($general > 0):
            $general_row = 1;
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order' => 'DESC',
              'cat' => 734,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                $permalink = get_the_permalink();
                $title = wp_trim_words(get_the_title(), 15);
                $author = get_the_author();

                if ($general_row === 1) {
                  ?>
                  <div class="col-lg-4 col-md-12">
                    <div class="right-top-stories home-right-section">
                      <div class="title">general</div>
                      <div class="related-post">
                        <div class="related-post-list">
                          <div class="post">
                            <div class="post-image ank-img-placeholder">
                              <a href="<?php echo $permalink; ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                  $thumbnail_id = get_post_thumbnail_id();
                                  $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                  the_post_thumbnail('full', array('class' => 'img-fluid', 'alt' => $thumbnail_alt));
                                }
                                ?>
                              </a>
                            </div>
                            <div class="post-content">
                              <div class="post-title">
                                <a href="<?php echo $permalink; ?>">
                                  <?php echo $title; ?>
                                </a>
                              </div>
                              <div class="post-meta">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                  By
                                  <?php echo $author; ?>
                                </a>
                                <span class="mx-2">|</span>
                                <span class="time">
                                  <?php echo get_post_publish_ago(); ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <?php
                } else {
                  ?>
                          <div class="post">
                            <div class="post-content">
                              <div class="post-title">
                                <a href="<?php echo $permalink; ?>">
                                  <?php echo $title; ?>
                                </a>
                              </div>
                              <div class="post-meta">
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-name">
                                  By
                                  <?php echo $author; ?>
                                </a>
                                <span class="mx-2">|</span>
                                <span class="time">
                                  <?php echo get_post_publish_ago(); ?>
                                </span>
                              </div>
                            </div>
                          </div>
                          <?php
                }
                $general_row++;
              }
              wp_reset_postdata();
            }
            ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- End Top Stories -->

<!-- ========= Main Content End ========= -->

<?php get_footer(); ?>


