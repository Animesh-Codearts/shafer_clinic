<?php
/**

 * Template Name: Thank You

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage shaferclinic

 */
get_header(); ?>

<section class="custom-thank-you ">
  <div class="container-fluid">
    
    <div class="row align-items-center">
      <div class="col-lg-6 ps-0 ty-left" >
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thank you image" style="width: 100%;">
      </div>
      <div class="col-lg-6 pe-lg-0 ty-right" >
        <div class="thank-you-wrap text-center">
          <div class="custom-heading"> 
            <!-- <span class="demo">visit us for surgery</span> -->
            <h3>Submission Successfully Sent!</h3>
          </div>
          <div class="thank-you-icon">
            <span class="demo"><i class="fa-solid fa-circle-check"></i></span>
          </div>
          <div class="thank-you-text">
            <p class="demo">Your message has been recieved <br>we will update you shortly!</p>
          </div>
          <a href="<?php echo site_url();?>" class="custom-button">Back to home <span class="demo"><i class="fa-solid fa-angle-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();