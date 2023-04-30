<?php
/*
*This is for hero section of the website
*/
?>

<section class="hero" id="hero">
            <div class="hero-image">
            
              <div id="animation-container"></div>
                
              </div>
                               
                         <div class="hero-text">
                            <h1>About Me</h1>
                            <h2><?php echo get_theme_mod('hero3', 'job title') ?></h2>
                            <p><?php echo get_theme_mod('hero4', 'This is a default value This is a default value This is a default value This is a default value') ?></p>
                                <a href="#porfolio" class="btn">My Work</a>
                            </div> 
         </section>     

       <section class=" skills" id="skills">
        <div class="skills-heading">Skills</div>
        <div class="skill-container">
          <div class="skill-item" id="active">
            <h3><?php echo get_theme_mod('card-heading-1', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-1', 'This is a default value This is a default value') ?></p>
          </div>
          <div class="skill-item" id="active">
            <h3><?php echo get_theme_mod('card-heading-2', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-2', 'This is a default value This is a default value') ?></p>
          </div>
          <div class="skill-item" id="active">
            <h3><?php echo get_theme_mod('card-heading-3', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-3', 'This is a default value This is a default value') ?></p>
          </div>
          <div class="skill-item" id="active">
            <h3><?php echo get_theme_mod('card-heading-4', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-4', 'This is a default value This is a default value') ?></p>
          </div>
          <div class="skill-item" id="active">
            <h3><?php echo get_theme_mod('card-heading-5', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-5', 'This is a default value This is a default value') ?></p>
          </div>
          <div class="skill-item" id="active">
            <h3> <?php echo get_theme_mod('card-heading-6', 'deafult one') ?></h3>
            <div class="line-break"></div>
            <p><?php echo get_theme_mod('card-area-6', 'This is a default value This is a default value') ?></p>
          </div>
          
        </div>
          <script>
               var animation = bodymovin.loadAnimation({

container: document.getElementById('animation-container'),

path: '<?php echo get_theme_mod('hero-json', 'https://assets7.lottiefiles.com/packages/lf20_4LvxLr0cIF.json') ?>',

renderer: 'svg',

loop: true,

autoplay: true,

name: "Demo Animation",

});   
          </script>
        </section>