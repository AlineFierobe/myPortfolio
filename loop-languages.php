<?php
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $languages = new WP_Query( array(
    'post_type' => 'Languages',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged'=>$paged
    ) );
?>

<?php if ($languages->have_posts()) : ?>
<?php while ($languages->have_posts()) : $languages->the_post(); ?>

<span class="loop-languages-items" title="<?php the_title() ?>"> <?php the_post_thumbnail( 'languages-thumbnails' ) ?> </span>

<?php endwhile; ?>
<?php endif; ?>