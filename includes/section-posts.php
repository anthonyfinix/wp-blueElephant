<section class="container pt-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="card card-body mb-2">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_content(); ?></br></p>
            </div>
    <?php endwhile;
    endif; ?>
</section>
<!-- <section class="carouse-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image1.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image2.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image3.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image4.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image4.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image5.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image6.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image7.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image8.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image1.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image2.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image3.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image4.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image4.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image5.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image6.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image7.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/carousel/image8.jpeg" alt=""> 
            </section> -->