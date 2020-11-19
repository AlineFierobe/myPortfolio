<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $tools = new WP_Query( array(
    'post_type' => 'Tools',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>

<?php if ($tools->have_posts()) : ?>
<?php while ($tools->have_posts()) : $tools->the_post(); ?>

<span class="loop-tool-items" title="<?php the_title() ?>"> <?php the_post_thumbnail( 'languages-thumbnails' ) ?> </span>

<?php endwhile; ?>
<?php endif; ?>