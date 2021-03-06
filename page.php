<?php get_header();

  while(have_posts()) {
    the_post();
  ?>

  <h2 class="page-heading"><?php the_title(); ?></h2>
  <div class="post-container">
    <section class="blogpost">
      <div class="card border-0">
        <?php if(has_post_thumbnail()) { ?>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()) ?>" alt="Card Image">
          </div>
        <?php } ?>
        <div class="card-description">
          <?php the_content(); ?>
        </div>
      </div>

    </section>
  <?php } ?>

  </div>

<?php get_footer(); ?>