<?php get_header(); ?>
    <main id="main-wrapper">
        <section class="container pt-5">
            <h5><?php the_title() ?></h5>
        </section>
        <div class="container">
            <?php get_template_part( 'includes/section', 'content' );?>
        </div>
    </main>

<?php get_footer(); ?>