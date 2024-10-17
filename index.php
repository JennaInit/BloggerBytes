<?php

get_header(); ?>

<div id="content">
    <main>

<?php
if(have_posts()) :

    while(have_posts()) : the_post(); ?>
    <article>
        <h2><a href="<?php the_permalink(); ?>"> <?php the_title();?></a></h2>
        <p class="date-category"><?php echo get_the_date();?> | <?php echo get_the_category_list(', ');?></p>
        <?php the_excerpt(); ?>
    </article>
    
        <?php
        endwhile;

    endif; ?>
    </main>

    <?php get_sidebar(); ?>
    </div> <!-----Content----->
<?php
    get_footer();
?>
