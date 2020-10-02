

<?php get_header(); ?>
    <div class="voiture">
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'marque',
            'hide_empty' => false,
        ) );?>

       <?php echo $terms; ?>


        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="projet">
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                    <h1 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>