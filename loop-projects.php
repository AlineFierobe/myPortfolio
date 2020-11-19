
<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $projects = new WP_Query( array(
    'post_type' => 'Projects',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged'=>$paged
    ) );
?>

<div class="projects-items-container">
    <?php if ($projects->have_posts()) : ?>
    <?php while ($projects->have_posts()) : $projects->the_post(); ?>
        <div class="projects-items">
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <a href="<?php the_permalink(); ?>">
                <div style="background: url('<?php the_post_thumbnail_url() ?>') center center/cover;" class="projects-items-thumbnail">
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>