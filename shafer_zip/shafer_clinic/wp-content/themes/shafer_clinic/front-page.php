<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage shaferclinic
 */
get_header(); 
?>

<section id="home" class="custom-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $hero_banner = get_field('all_banner'); $j=1; ?>
            <?php foreach ($hero_banner as $banners) { ?>


            <div class="carousel-item <?php if($j == 1){ echo 'active';} ?>">
                <img src="<?php echo get_the_post_thumbnail_url($banners); ?>" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="carousel-caption custom-carousel-caption">
                                <h2>
                                    <?php echo get_the_title($banners); ?>
                                </h2>
                                <p>
                                    <?php echo get_field('sub_heading',$banners); ?>
                                </p>
                                <a href="<?php echo get_field('learn_more_button_link',$banners); ?>"
                                    class="custom-button">Learn More <span class="demo"><i
                                            class="fa-solid fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $j++; } ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="custom-partners custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="partner-slider-wrap">
                    <div class="col-lg-10">
                        <div id="custom-partner-slider" class="owl-carousel owl-theme custom-partner-slider">
                            <?php $hero_partners = get_field('all_partner'); $j=1; ?>
                            <?php foreach ($hero_partners as $partners) { ?>

                            <div class="item">
                                <div class="partner-slide">
                                    <div class="icon_box">
                                        <img src="<?php echo get_the_post_thumbnail_url($partners); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="custom-quick-services custom-pad pt-0">
    <div class="container">
        <div class="row">
            <?php $hero_service = get_field('service'); ?>
            <?php for($i=1; $i<=3; $i++) { ?>
            <div class="col-md-4 col-12">
                <div class="quick-service">
                    <div class="quick-service-icon">
                        <img src="<?php echo $hero_service['a_image_'.$i]; ?>"
                            alt="Icon depicting plastic surgery quick service">
                    </div>
                    <div class="quick-service-heading">
                        <h4>
                            <?php echo $hero_service['a_title_'.$i]; ?>
                        </h4>
                    </div>
                    <div class="quick-service-text">
                        <p class="demo">
                            <?php echo $hero_service['a_descriptions_'.$i]; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="custom-bef-aft custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-heading">
                    <?php $hero_box = get_field('before_after_section'); ?>
                    <span class="demo">
                        <?php echo $hero_box['before_after_heading']; ?>
                    </span>
                    <h3>
                        <?php echo $hero_box['before_after_sub_heading']; ?>
                    </h3>
                    <p class="demo">
                        <?php echo $hero_box['before_after_third_heading']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="custom-bef-aft-content">
            <div class="row">
                <?php 
              $all_box = $hero_box['all_boxes'];

              foreach ($all_box as $box) {
               
               ?>

                <div class="col-lg-6 ">
                    <div class="gallery-box-wrap">
                        <div class="gallery-img-box">
                            <div class="gal-img-heading">
                                <h5>
                                    <?php echo get_field('ba_heading',$box); ?>
                                </h5>
                            </div>
                            <div class="gal-age-text">
                                <p class="demo">
                                    <?php echo get_field('ba_sub_heading',$box); ?>
                                </p>
                            </div>
                            <div class="gal-img-btn">
                                <a href="javascript:void(0)" class="gal-img-button gallery-a-btn">I agree</a>
                            </div>
                            <div class="gal-img-btn-yn cus-hide">
                                <a href="javascript:void(0)" id="click-yes" class="gal-img-button-y gal-img-button"
                                    onclick="yesClicked()">Yes</a>
                                <a href="javascript:void(0)" class="gal-img-button-n gal-img-button">No</a>
                            </div>
                        </div>
                        <div class="gallery-image cus-hide">
                            <img src="<?php echo get_the_post_thumbnail_url($box); ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="bef-aft-button-wrap text-center mt-md-5 mt-sm-3 mt-2">
            <a href="<?php echo $hero_box['before_after_button_link']; ?>" class="custom-button">View All <span
                    class="demo"><i class="fa-solid fa-angle-right"></i></span></a>
        </div>

    </div>
</section>

<section id="services" class="custom-service-tab">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $hero_services = get_field('service_section');
                    $all_services = $hero_services['services'];
              ?>
                <ul class="nav nav-tabs cus-nav-tabs" id="myTab" role="tablist">
                    <?php 
                  $k=1;

                  foreach ($all_services as $service) { 
                    $slug = get_post_field( 'post_name', $service );
                  ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php if($k == 1){ echo 'active';} ?>" id="<?php echo $slug; ?>-tab"
                            data-bs-toggle="tab" data-bs-target="#<?php echo $slug; ?>-tab-pane" type="button"
                            role="tab" aria-controls="<?php echo $slug; ?>-tab-pane" aria-selected="true">
                            <?php echo get_the_title($service); ?>
                        </button>
                    </li>
                    <?php $k++; } ?>
                </ul>
                <div class="tab-content cus-tab-content" id="myTabContent">
                    <?php 
                  $j=1;

                  foreach ($all_services as $service) {  
                  $slug = get_post_field( 'post_name', $service );

                  ?>

                    <div class="tab-pane fade <?php if($j == 1){ echo 'show';} ?> <?php if($j == 1){ echo 'active';} ?>"
                        id="<?php echo $slug; ?>-tab-pane" role="tabpanel" aria-labelledby="<?php echo $slug; ?>-tab"
                        tabindex="0">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="cus-tab-img">
                                    <img src="<?php echo get_the_post_thumbnail_url($service); ?>"
                                        alt="<?php echo get_the_title($service); ?>">
                                </div>
                            </div>
                            <div class="col-lg-7 ps-lg-5">
                                <div class="cus-tab-content-right-wrap">
                                    <div class="custom-heading">
                                        <span class="demo">Our procedure</span>
                                        <h3>
                                            <?php echo get_the_title($service); ?>
                                        </h3>
                                    </div>
                                    <div class="cus-tab-text">
                                        <p class="demo">
                                            <?php echo get_the_excerpt($service); ?>
                                        </p>
                                    </div>
                                    <a href="<?php echo get_the_permalink($service); ?>" class="custom-button">Learn
                                        More <span class="demo"><i class="fa-solid fa-angle-right"></i></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php $j++; } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom-news-outlets custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news-outlet-slider-wrap">
                    <div class="col-lg-10">
                        <div id="custom-news-outlet-slider" class="owl-carousel owl-theme custom-news-outlet-slider">
                            <?php $hero_news = get_field('brand_section');
                          $all_news = $hero_news['all_brand'];
                          foreach ($all_news as $news) { 
                          ?>
                            <div class="item">
                                <div class="news-outlet-slide">
                                    <div class="icon_box">
                                        <img src="<?php echo get_the_post_thumbnail_url($news); ?>"
                                            alt="<?php echo get_the_title($news); ?>">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $hero_media = get_field('media_section'); ?>
<section class="custiom-in-the-media custom-pad"
    style="background-image: url(<?php echo $hero_media['media_background']; ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="in-the-media-content">
                    <div class="in-the-media-heading">
                        <h4>
                            <?php echo $hero_media['media_title']; ?>
                        </h4>
                    </div>
                    <div class="in-the-media-text">
                        <p class="demo">
                            <?php echo $hero_media['media_details']; ?>
                        </p>
                    </div>
                    <a href="<?php echo $hero_media['media_link']; ?>" class="custom-button">Learn More <span
                            class="demo"><i class="fa-solid fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $hero_testimonials = get_field('testimonials_sections'); ?>
<section id="testimonials" class="custom-testimonials custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-heading">
                    <span class="demo">
                        <?php echo $hero_testimonials['testimonials_sub_heading']; ?>
                    </span>
                    <h3>
                        <?php echo $hero_testimonials['testimonials_heading']; ?>
                    </h3>
                </div>
                <div class="tes-quotes-icon text-center">
                    <img src="http://localhost/shafer_clinic/wp-content/uploads/2022/06/tes-icon.png"
                        alt="Quotation mark icon">
                </div>
                <div class="testimonial-slider-wrap">
                    <div class="col-lg-10">
                        <div id="custom-testimonial-slider" class="owl-carousel owl-theme custom-testimonial-slider">

                            <?php $all_testimonials = $hero_testimonials['all_testimonials'];
                          foreach ($all_testimonials as $testimonials) { 
                          ?>
                            <div class="item">
                                <div class="testimonial-slide">
                                    <div class="testimonial-content">
                                        <p class="demo">
                                            <?php echo get_the_excerpt($testimonials); ?>
                                        </p>
                                        <span class="testimonial-subtitle">
                                            <?php echo get_field('positionrole',$testimonials); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!--     -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php $hero_about = get_field('about_us_section'); ?>
<section id="about-us" class="custom-visit-us ">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-7 ps-0 vi-us-left"
                style="background-image: url(<?php echo $hero_about['about_us_background']; ?>);">
            </div>
            <div class="col-lg-5 pe-0 vi-us-right"
                style="background-image: url(<?php echo $hero_about['about_us_background']; ?>);">
                <div class="visit-us-wrap">
                    <div class="custom-heading">
                        <span class="demo">
                            <?php echo $hero_about['about_us_sub_headinbg']; ?>
                        </span>
                        <h3>
                            <?php echo $hero_about['about_us_heading']; ?>
                        </h3>
                    </div>
                    <div class="visit-us-text">
                        <p class="demo">
                            <?php echo $hero_about['about_us_details']; ?>
                        </p>
                    </div>
                    <a href="<?php echo $hero_about['about_us_button_link']; ?>" class="custom-button">Learn More <span
                            class="demo"><i class="fa-solid fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $hero_form = get_field('form_section'); ?>

<section id="contact-us" class="custom-contact-us custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-items-center">
                <div class="contact-us-left">
                    <div class="custom-heading">
                        <span class="demo">
                            <?php echo $hero_form['form_title']; ?>
                        </span>
                        <h3>
                            <?php echo $hero_form['form_sub_title']; ?>
                        </h3>
                    </div>
                    <div class="custom-contact-us-form">
                        <?php 
                     $form = $hero_form['form'];
                     echo do_shortcode($form);
              ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 align-items-center">
                <div class="contact-us-right">
                    <img src="<?php echo $hero_form['form_image']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();