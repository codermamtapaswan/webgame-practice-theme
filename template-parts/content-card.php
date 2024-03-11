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
          <span class="cat-name mb-10">

          <?php
          
          ?>
            Internet
          
          </span>
          <div class="truncate-2 wg-title mb-10">
              <?php echo get_the_title();?>
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

                  Alex Smith
              </span>
          </div>
      </div>
  </div>
</a>