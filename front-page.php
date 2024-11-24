<?php get_header(); ?>
<div id="banner">
  <h1>St. Mark's Lodge No. 44</h1>
</div>

<main>
  <a href="<?php echo site_url('/news-events'); ?>">
    <h2 class="section-heading">News &amp Events</h2>
  </a>

  <section>
    <?php

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
    );

    $blogposts = new WP_Query($args);

    while ($blogposts->have_posts()) {
      $blogposts->the_post();
    ?>

      <div class="card border-0">
        <?php if (has_post_thumbnail(get_the_ID())) { ?>
          <a href="<?php the_permalink(); ?>">
            <div class="card-image">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="Card Image">
            </div>
          </a>
        <?php } else { ?>
          <a href="<?php the_permalink(); ?>">
            <div class="card-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-placeholder.png" alt="Lodge Logo">
            </div>
          </a>
        <?php } ?>
        <div class="card-description">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
          <a href="<?php the_permalink() ?>" class="btn-readmore">Read More</a>
        </div>
      </div>
    <?php
    }
    wp_reset_query();
    ?>
  </section>

  <?php get_footer(); ?>