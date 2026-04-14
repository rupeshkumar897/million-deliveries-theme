<?php get_header(); ?>

<main>
    <?php 
    $post_id = get_the_ID(); 
    $hero_title = rwmb_meta( 'task_hero_title', '', $post_id );
    $hero_desc  = rwmb_meta( 'task_hero_desc', '', $post_id );
    ?>
    </main>

<?php wp_footer(); // Footer ke liye ?>
</body>
</html>