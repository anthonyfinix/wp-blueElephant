<div class="card">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</div>
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