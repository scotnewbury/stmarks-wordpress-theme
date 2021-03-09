<?php get_header(); ?>

  <h2 class="page-heading"><?php the_archive_title() ?></h2>

  <section>
    <?php 

    while(have_posts()) {
      the_post();

    ?>
    <div class="card border-0">
      <div class="card-image">
      <?php if(has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>">
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()) ?>" alt="Card Image">
          </div>
        </a>
      <?php } else { ?>
        <a href="<?php the_permalink(); ?>">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/st-marks-logo-500px.png" alt="Lodge Logo">
          </div>
        </a>        
      <?php } ?>
      </div>
      <div class="card-description">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>
        <div class="card-meta">
          Posted by <?php the_author(); ?> 
          on <?php the_time('F j, Y'); ?></a>
        </div>
        <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
      </div>
    </div>
    
    <?php 
      } 
      wp_reset_query(); 
    ?>
    
  </section>

  <div class="stm-pagination">
    <?php echo paginate_links(); ?>
  </div>

<?php get_footer(); ?>