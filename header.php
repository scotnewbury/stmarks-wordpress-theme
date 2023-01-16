<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="title" property="og:title" content="St. Mark's Lodge No. 44 F.& A.M.">
    <meta name="image" property="og:image" content="https://stmarkslodge.org/wp-content/themes/STMarks/screenshot.png">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <?php wp_head(); ?>
    <title>St. Mark's Lodge</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-xl fixed-top">
      <a class="navbar-brand" href="<?php echo site_url(''); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/st-marks-logo.png" alt="Lodge Logo" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url(''); ?>"
            <?php if(is_front_page()) echo 'id="active"'?>>Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/news-events'); ?>"
            <?php if(get_post_type() == 'post') echo 'id="active"'?>>News & Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/2023-lodge-officers/'); ?>"
            <?php if(is_page('2023-lodge-officers/')) echo 'id="active"'?>>2023 Officers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/temple-calendar/'); ?>"
            <?php if(is_page('temple-calendar/')) echo 'id="active"'?>>Temple Calendar</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">
              Lodge History
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('/brief-lodge-history/'); ?>"
              <?php if(is_page('brief-lodge-history/')) echo 'id="active"'?>>A Brief Lodge History</a>
              <a class="dropdown-item" href="<?php echo site_url('past-masters-of-st-marks-lodge/'); ?>"
              <?php if(is_page('past-masters-of-st-marks-lodge/')) echo 'id="active"'?>>Past Masters of St. Mark's Lodge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/hall-rental/'); ?>"
            <?php if(is_page('hall-rental/')) echo 'id="active"'?>>Hall Rental</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/contact-st-marks/'); ?>"
            <?php if(is_page('contact-st-marks/')) echo 'id="active"'?>>Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input 
            class="form-control mr-sm-2"
            type="search" 
            name="s" 
            placeholder="Search Here . . ." 
            aria-label="Search Here . . ."
            value="<?php echo get_search_query() ?>">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
<?php if (!is_front_page()) { ?>
  <main>
<?php } ?>