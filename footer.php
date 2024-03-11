    <!-- Footer Start-->
    <footer>
        <div class="container">
            <div class="row mb-20 align-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="foot-logo">
                         <?php 
                                if(function_exists('the_custom_logo')){
                                    the_custom_logo();
                                }
                                else{
                                    // FIXME: NOT working
                                    bloginfo('name');
                                }                              
                            

                             if(is_active_sidebar('footer_about')){
                                    dynamic_sidebar('footer_about');
                                }                              
                            
                           
                            if(is_active_sidebar('social_media_links')){
                                dynamic_sidebar('social_media_links');
                            }
                            
                            ?>

                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="foot-links">
                        <div class="menu-link clearfix">
                            <div class="foot-title h5">Categories</div>
                            <?php
                                wp_nav_menu(array(
                                "theme_location"=>"footer_category_menu",
                                "container_class"=>"menu-links",
                                "container"=>"ul",
                                "menu_class"=>"ps-0 mb-0",
                                "item-wrap"=>"<ul id='%1$s' class='%2$s'>%3$s</ul>",
                                ));
                            ?>
                            
                        </div>
                        <div class="newsletter">
                            <div class="foot-title h5">Subscribe</div>
                            <p>Unlock the Power of Play: Your Gateway to Gaming Insights and Adventures! </p>
                            <form role="subcribe" action="#">
                                <input type="email" placeholder="Email Address" title="subscribe" required="">
                                <button type="submit">
                                    <svg width="16" height="16" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m17.707 9.293-5-5a.999.999 0 1 0-1.414 1.414L14.586 9H3a1 1 0 1 0 0 2h11.586l-3.293 3.293a.999.999 0 1 0 1.414 1.414l5-5a.999.999 0 0 0 0-1.414z"
                                            fill="#fff" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        <div class="contact d-flex align-items-center">
                            <svg width="16" height="16" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M255.4 48.2c.2-.1 .4-.2 .6-.2s.4 .1 .6 .2L460.6 194c2.1 1.5 3.4 3.9 3.4 6.5v13.6L291.5 355.7c-20.7 17-50.4 17-71.1 0L48 214.1V200.5c0-2.6 1.2-5 3.4-6.5L255.4 48.2zM48 276.2L190 392.8c38.4 31.5 93.7 31.5 132 0L464 276.2V456c0 4.4-3.6 8-8 8H56c-4.4 0-8-3.6-8-8V276.2zM256 0c-10.2 0-20.2 3.2-28.5 9.1L23.5 154.9C8.7 165.4 0 182.4 0 200.5V456c0 30.9 25.1 56 56 56H456c30.9 0 56-25.1 56-56V200.5c0-18.1-8.7-35.1-23.4-45.6L284.5 9.1C276.2 3.2 266.2 0 256 0z">
                                </path>
                            </svg>
                            <div>
                                <span class="h6 mb-0 text-white">Email Us :</span>
                                <a href="mailto:info@webgame.com"> info@webgame.com</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
             <?php
                 if(is_active_sidebar('disclaimer')){
                    dynamic_sidebar('disclaimer');
                }
             ?>                   
        </div>
        <div class="copyright">
            <div class="container d-grid">
                <?php
                    wp_nav_menu(array(
                        "theme_location"=>"footer_menu",
                        "container"=>"ul",
                        "menu_class"=>"importants-links",
                        "item_wrap"=>"<ul id='%1$s' class='%2$s'>%3$s</ul>",
                    ));
                ?>
                <span>
                    Copyright
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path
                            d="M6.66667 0C10.3467 0 13.3333 2.98667 13.3333 6.66667C13.3333 10.3467 10.3467 13.3333 6.66667 13.3333C2.98667 13.3333 0 10.3467 0 6.66667C0 2.98667 2.98667 0 6.66667 0ZM6.66667 1.33333C3.72 1.33333 1.33333 3.72 1.33333 6.66667C1.33333 9.61333 3.72 12 6.66667 12C9.61333 12 12 9.61333 12 6.66667C12 3.72 9.61333 1.33333 6.66667 1.33333ZM6.66667 3.33333C7.88 3.33333 8.942 3.982 9.52533 4.952L8.38267 5.638C8.20284 5.33816 7.94756 5.0907 7.64226 4.9203C7.33697 4.74989 6.99235 4.66249 6.64275 4.66682C6.29314 4.67115 5.95078 4.76704 5.6498 4.94495C5.34882 5.12285 5.09973 5.37655 4.92738 5.68075C4.75503 5.98494 4.66543 6.32901 4.66752 6.67863C4.66961 7.02825 4.76332 7.37122 4.9393 7.67333C5.11528 7.97544 5.36738 8.22614 5.67047 8.40044C5.97356 8.57473 6.31704 8.66652 6.66667 8.66667C7.01209 8.66689 7.35167 8.57759 7.6523 8.40747C7.95293 8.23736 8.20433 7.99223 8.382 7.696L9.52533 8.38133C9.15068 9.00708 8.5811 9.49265 7.90395 9.76357C7.2268 10.0345 6.47948 10.0758 5.7766 9.88115C5.07372 9.68651 4.45409 9.26667 4.01276 8.68603C3.57142 8.10539 3.33275 7.396 3.33333 6.66667C3.33333 4.82667 4.82667 3.33333 6.66667 3.33333Z"
                            fill="white"></path>
                    </svg>
                    <strong><?php echo date('Y');?> WebGame.</strong>All Rights Reserved
                </span>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Back top Button Start-->
    <button title="back to top button" id="scroll_to_top"><svg width="16" fill="#fff" viewBox="0 -4.5 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <g stroke-width="0" />
            <g stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M19.708 10.634c.39-.405.39-1.06 0-1.464L11.444.607a1.95 1.95 0 0 0-2.827 0L.292 9.232c-.385.4-.39 1.048-.01 1.454a.976.976 0 0 0 1.425.01l7.617-7.893a.975.975 0 0 1 1.414 0l7.557 7.83a.974.974 0 0 0 1.413 0"
                fill-rule="evenodd" />
        </svg></button>
    <!-- Back top Button  End-->


    <?php
        wp_footer();
    ?>
</body>

</html>