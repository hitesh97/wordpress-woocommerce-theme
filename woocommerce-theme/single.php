<?php get_header(); ?>

<div class="container content">

    <div class='row'>
        <div class='col-lg-3'>
            <?php dynamic_sidebar('blog-sidebar'); ?>

        </div>
        <div class='col-lg-9'>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('post_image') ?>" class="img-fluid mb-5" alt="<?php the_title(); ?>" />
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile;
            else : endif; ?>

        </div>

    </div>

</div>


<?php get_footer(); ?>