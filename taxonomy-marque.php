<?php get_header(); ?>
    <div class="marques">
        <p class="heading">
            Marque : <?php single_term_title(); ?>
        </p>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="marque">
                    <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                    <h1 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h1>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>