
<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $projects = new WP_Query( array(
    'post_type' => 'Projects',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged'=>$paged
    ) );
?>

<div class="loop-projects">
    <?php if ($projects->have_posts()) : ?>
    <?php while ($projects->have_posts()) : $projects->the_post(); ?>
        <div class="loop-projects-items">
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <a href="<?php the_permalink(); ?>">
                <div style="background: url('<?php the_post_thumbnail_url() ?>') center center/cover;" class="loop-projects-items-thumbnail">
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>