<?php
/*
*This is for experience section of the website
*/
?>
<section class="xp" id="experience">
        <div class="xp-heading">Experience</div>
        <div class="xp-container">
        <?php if ( true == get_theme_mod( 'switch_xp1', 'on' ) ) : ?>

          <div class="xp-item">
            <h3 class="jok"><?php echo get_theme_mod('xph1', 'default value') ?></h3>
            <div class="xp-mini-flex"><p class="mok"><?php echo get_theme_mod('xpc1', 'default value') ?></p><p class="year"><?php echo get_theme_mod('xpd1', 'default value') ?></p></div>
            <div class="line-break"></div>
            <div class="dok"><p><?php echo get_theme_mod('xpp1', 'default value') ?></p></div>
          </div>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'switch_xp2', 'on' ) ) : ?>
  <div class="xp-item">
            <h3 class="jok"><?php echo get_theme_mod('xph2', 'default value') ?></h3>
            <div class="xp-mini-flex"><p class="mok"><?php echo get_theme_mod('xpc2', 'default value') ?></p><p class="year"><?php echo get_theme_mod('xpd2', 'default value') ?></p></div>
            <div class="line-break"></div>
            <div class="dok"> <p><?php echo get_theme_mod('xpp2', 'default value') ?></p></div>
          </div>
  <?php endif; ?>
  <?php if ( true == get_theme_mod( 'switch_xp3', 'on' ) ) : ?>
    <div class="xp-item">
            <h3 class="jok"><?php echo get_theme_mod('xph3', 'default value') ?></h3>
            <div class="xp-mini-flex"><p class="mok"><?php echo get_theme_mod('xpc3', 'default value') ?></p><p class="year"><?php echo get_theme_mod('xpd3', 'default value') ?></p></div>
            <div class="line-break"></div>
            <div class="dok"> <p><?php echo get_theme_mod('xpp3', 'default value') ?></p></div>
          </div>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'switch_xp4', 'on' ) ) : ?>
  <div class="xp-item">
            <h3 class="jok"><?php echo get_theme_mod('xph4', 'default value') ?></h3>
            <div class="xp-mini-flex"><p class="mok"><?php echo get_theme_mod('xpc4', 'default value') ?></p><p class="year"><?php echo get_theme_mod('xpd4', 'default value') ?></p></div>
            <div class="line-break"></div>
            <div class="dok"> <p><?php echo get_theme_mod('xpp4', 'default value') ?></p></div>
          </div>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'switch_xp5', 'on' ) ) : ?>
  <div class="xp-item">
            <h3 class="jok"><?php echo get_theme_mod('xph5', 'default value') ?></h3>
            <div class="xp-mini-flex"><p class="mok"><?php echo get_theme_mod('xpc5', 'default value') ?></p><p class="year"><?php echo get_theme_mod('xpd5', 'default value') ?></p></div>
            <div class="line-break"></div>
            <div class="dok"> <p><?php echo get_theme_mod('xpp5', 'default value') ?></p></div>
          </div>
<?php endif; ?>
          
        
         
        
      
          
        </div>
        </section>
        
              
           