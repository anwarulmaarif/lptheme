<!DOCTYPE html>
<html>
<head>
  <title>Tes Tema</title>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="wp_content/theme/lptheme/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->

<header class="site-header">
          <h3><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h3>
          <!-- <h5><?php bloginfo('description'); ?></h5>  deskripsi -->
</header>
</nav>

<body <?php body_class(); ?> >