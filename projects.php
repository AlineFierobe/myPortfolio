<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>
    <article class="page-projects-article">
        <h1>                
            <?php the_title(); ?>
        </h1>
        <div class="page-projects-content">
            <?php the_content(); ?>
        </div>
    </article>
    <article class="page-projects-article">
        <?php get_template_part('loop-all-projects'); ?>
        <p class="noMore">More projects to come!</p>
    </article>
<?php get_footer(); ?>
