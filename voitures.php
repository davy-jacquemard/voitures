<?php
/*
Template Name: Voitures
*/
?>

<?php get_header(); ?>
<?php
// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'voitures',
    'meta_key' => 'cylindre',
    'meta_value_num' => 100, // ou meta_value pour tester un texte
    'meta_compare' => '<' // < > != >= <=
);

// 2. On exécute la WP Query
$query = new WP_Query( $args ); ?>

<?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
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
<?php get_footer(); ?>