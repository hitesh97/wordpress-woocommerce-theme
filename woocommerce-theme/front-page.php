<?php get_header(); ?>

<div id="hero">

    <div class="container d-flex align-items-center h-100">
        <h1>Welcome to my shop</h1>
    </div>

</div>

<div class="content">
    <div class="container content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        else : endif; ?>
    </div>
</div>
<?php get_footer(); ?>