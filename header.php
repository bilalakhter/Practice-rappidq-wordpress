<?php
/*
*This is for header of website
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      
        <?php bloginfo('name') ?>
    </title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>

   <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/style.css">
   <script defer src="<?php echo get_theme_file_uri() ?>/script.js"></script>
   <?php wp_head() ?>
</head>

<body>

<header>

        <a href="#"  class="logo">
          <?php echo get_theme_mod('name-header-change', 'Jack draw') ?>
        </a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#hero"><div class="mini-flex"><i class='mfc bx bxs-home'></i>Home</div></a></li>
            <li><a href="#skills"><div class="mini-flex"><i class='mfc bx bxs-cog'></i>Skill</div></a></li>
            <li><a href="#portfolio"><div class="mini-flex"><i class='mfc bx bx-male'></i>Portfolio</div></a></li>
            <li><a href="#experience"><div class="mini-flex"><i class='mfc bx bxs-briefcase'></i>Experience</div></a></li>
            
        </ul>
                
        <div>
          <input type="checkbox" class="checkbox" id="checkbox">
        <label for="checkbox" class="label">
          <i class='bx bxs-moon' ></i>
          <i class='bx bxs-sun'></i>
          <div class='ball'>
        </label>
      </div>
                
               
    </header>