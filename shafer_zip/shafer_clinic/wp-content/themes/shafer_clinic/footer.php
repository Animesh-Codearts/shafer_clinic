<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage shaferclinic
 */

?>
  <footer class="custom-footer">
    <div class="container">
      <div class="footer-main">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 ms-0">
            <div class="footer-content">
              <div class="footer-logo">
                <img src="<?php echo get_option('footer_logo'); ?>" alt="Shafer Clinic Logo">
              </div>
              <ul role="list" class="footer-contact">
                <li>
                  <a href="tel:<?php echo get_option('consult_number'); ?>" class="d-flex align-items-center"> <span class="footer-contact-icon m-0"><i
                        class="fa-solid fa-phone"></i></span>
                    <p class="demo"><?php echo get_option('consult_number'); ?></p>
                  </a>
                </li>
                <li>
                  <a href="mailto:<?php echo get_option('email'); ?>" class="d-flex align-items-center"><span class="footer-contact-icon m-0"><i
                        class="fa-solid fa-envelope"></i></span>
                    <p class="demo"><?php echo get_option('email'); ?></p>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_option('address'); ?>" class="d-flex align-items-center"> <span class="footer-contact-icon m-0"><i class="fa-solid fa-location-dot"></i></span>
                    <p class="demo"><?php echo get_option('address'); ?></p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-2">
            <div class="footer-content">
              <div class="footer-headings">
                <h5>Services</h5>
              </div>
              <?php dynamic_sidebar('menu-1'); ?>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-2">
            <div class="footer-content">
              <div class="footer-headings">
                <h5>Links</h5>
              </div>
              <?php dynamic_sidebar('menu-2'); ?>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="footer-content">
              <div class="footer-headings">
                <h5>Connect</h5>
              </div>
              <ul role="list" class="footer-socials d-flex">
                <li><a href="<?php echo get_option('facebook_url'); ?>" class="footer-social-icon" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="<?php echo get_option('twitter_url'); ?>" class="footer-social-icon" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="<?php echo get_option('instagram_url'); ?>" class="footer-social-icon" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
              </ul>
              <div class="footer-text">
                <p class="demo"><?php echo get_option('messages'); ?> </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="footer-copyright">
        <div class="row">
          <div class="col-lg-12 text-center py-lg-3 py-2 border-top">
            <p class="demo"><?php echo get_option('copyright'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <?php wp_footer(); ?>
</body>

</html>
