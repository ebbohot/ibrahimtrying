<!doctype html>
<html <?php language_attributes();?>  >       <!--  <html lang="en">       -->
<head>
    <meta charset="<?php bloginfo('charset') ?>">                                       <!--  <meta charset="UTF-8"> -->
    <title><?php bloginfo('name');?><?php wp_title('>','true','left');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('->','true','right');?><?php bloginfo('name');?></title>
    <link rel="pingback" href="<?php bloginfo('pingback'); ?>"/>
    <?php wp_head(); ?>

    <script src="script.js"></script>
</head>

<body <?php body_class();?>>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.html">BD IT Solutions.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">ABOUT US</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="services.html">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.html">OUR TEAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.html">CONTACTS</a>
          </li>
        </ul>

      </div>
    </nav>
  </header>