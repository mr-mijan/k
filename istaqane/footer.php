    <!-- start of footer-section -->
    <footer class="site-footer">
            <div class="upper-footer s2">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <?php dynamic_sidebar( 'footer_1' ) ?>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                            <?php dynamic_sidebar( 'footer_2' ) ?>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                        <?php dynamic_sidebar( 'footer_3' ) ?>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12">    
                            <?php dynamic_sidebar( 'footer_4' ) ?>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row g-0">
                        <div class="col col-lg-6 col-12">
                            <p class="copyright"> <?php echo get_theme_mod('footer_section_setting'); ?></p>
                        </div>
                        <div class="col col-lg-6 col-12">
                             <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'Footer_Menu',
                                ));
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer-section -->


    </div>
    <!-- end of page-wrapper -->
    <?php wp_footer(); ?>
</body>

</html>