<?php
/*
*This is for project section of the website
*/
?>

<section class="portfolio" id="portfolio">
          <div class="xp-heading">Portfolio</div>
          <div class="portfolio-container">
          <?php if ( true == get_theme_mod( 'item1', 'on' ) ) : ?>
            <div class="portfolio-item" id="active">
           
            <div class="portfolio-image1">
              </div>
              <?php $image_p1 = get_theme_mod( 'image-item1', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image1{
              background: url('<?php echo esc_url( $image_p1 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
           <div class="work-detail">
                <div class="gok">
                <?php $icon1_p1 = get_theme_mod( 'icon1-item1', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p1 ); ?>" alt=""> 
                <?php $icon2_p1 = get_theme_mod( 'icon2-item1', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p1 ); ?>" alt="">
                <?php $icon3_p1 = get_theme_mod( 'icon3-item1', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p1 ); ?>" alt="">     
              </div>
                  
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
              <!---modalopen-->
                    <div class="modal modalpopup " id="modal">
                              <div class="modal-header">
                               <h3 class="popup-title">Case Study</h3>
                               <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                              </div>
                         <div class="modal-content">
                         
                         <div class="popup-images">
                          <?php $popap1_p1 = get_theme_mod( 'popup1-item1', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p1 ); ?>" alt="">
                            <?php $popap2_p1 = get_theme_mod( 'popup2-item1', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p1 ); ?>" alt="">
                             
                           </div>
                           <div class="popup-case-study">
                             <p class="popup-details">
                             <?php echo get_theme_mod('popuptext1', 'This is a default value This is a default value') ?>
                                
                             </p>
                                  
                             
                           </div>                        
                                 </div>
                         </div>
                  
                        <div id="overlay">
                         
                        </div>
                         <!---popup-close-->
                      

           </div>
         </div>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'item2', 'on' ) ) : ?>
  <div class="portfolio-item" id="active">
              <div class="portfolio-image2">
              </div>
              <?php $image_p2 = get_theme_mod( 'image-item2', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image2{
              background: url('<?php echo esc_url( $image_p2 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
                <div class="work-detail">
                <div class="gok">
                <?php $icon1_p2 = get_theme_mod( 'icon1-item2', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p2 ); ?>" alt=""> 
                <?php $icon2_p2 = get_theme_mod( 'icon2-item2', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p2 ); ?>" alt="">
                <?php $icon3_p2 = get_theme_mod( 'icon3-item2', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p2 ); ?>" alt="">     
              </div>
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
             <!---modalopen-->
                   <div class="modalpopup modal" id="modal">
                             <div class="modal-header">
                              <h3 class="popup-title">Case Study</h3>
                              <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                             </div>
                        <div class="modal-content">
                        
                        <div class="popup-images">
                          <?php $popap1_p2 = get_theme_mod( 'popup1-item2', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p2 ); ?>" alt="">
                            <?php $popap2_p2 = get_theme_mod( 'popup2-item2', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p2 ); ?>" alt="">
                            
                          </div>
                          <div class="popup-case-study">
                            <p class="popup-details">
                            <?php echo get_theme_mod('popuptext2', 'This is a default value This is a default value') ?>
                               
                            </p>
                                 
                            
                          </div>                        
                                </div>
                        </div>
                 
                       <div id="overlay">
                        
                       </div>
                        <!---popup-close-->
                          </div>
                      
              </div>
  <?php endif; ?>

  <?php if ( true == get_theme_mod( 'item3', 'on' ) ) : ?>
    <div class="portfolio-item" id="active">
              <div class="portfolio-image3">
              </div>
              <?php $image_p3 = get_theme_mod( 'image-item3', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image3{
              background: url('<?php echo esc_url( $image_p3 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
              <div class="work-detail">
                <div class="gok">
                <?php $icon1_p3 = get_theme_mod( 'icon1-item3', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p3 ); ?>" alt=""> 
                <?php $icon2_p3 = get_theme_mod( 'icon2-item3', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p3 ); ?>" alt="">
                <?php $icon3_p3 = get_theme_mod( 'icon3-item3', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p3 ); ?>" alt="">     
              </div>
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
             <!---modalopen-->
                   <div class="modalpopup modal" id="modal">
                             <div class="modal-header">
                              <h3 class="popup-title">Case Study</h3>
                              <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                             </div>
                        <div class="modal-content">
                        
                          <div class="popup-images">
                          <?php $popap1_p3 = get_theme_mod( 'popup1-item3', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p3 ); ?>" alt="">
                            <?php $popap2_p3 = get_theme_mod( 'popup2-item3', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p3 ); ?>" alt="">
                            
                          </div>
                          <div class="popup-case-study">
                            <p class="popup-details">
                            <?php echo get_theme_mod('popuptext3', 'This is a default value This is a default value') ?>
                               
                            </p>
                                 
                            
                          </div>                        
                                </div>
                        </div>
                 
                       <div id="overlay">
                        
                       </div>
                        <!---popup-close-->
                          </div>
                      
              </div>
  <?php endif; ?>
  <?php if ( true == get_theme_mod( 'item4', 'on' ) ) : ?>
    <div class="portfolio-item" id="active">
              <div class="portfolio-image4">
              </div>
              <?php $image_p4 = get_theme_mod( 'image-item4', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image4{
              background: url('<?php echo esc_url( $image_p4 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
              <div class="work-detail">
                <div class="gok">
                <?php $icon1_p4 = get_theme_mod( 'icon1-item4', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p4 ); ?>" alt=""> 
                <?php $icon2_p4 = get_theme_mod( 'icon2-item4', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p4 ); ?>" alt="">
                <?php $icon3_p4 = get_theme_mod( 'icon3-item4', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p4 ); ?>" alt="">     
              </div>
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
             <!---modalopen-->
                   <div class="modalpopup modal" id="modal">
                             <div class="modal-header">
                              <h3 class="popup-title">Case Study</h3>
                              <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                             </div>
                        <div class="modal-content">
                        
                        <div class="popup-images">
                          <?php $popap1_p4 = get_theme_mod( 'popup1-item4', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p4 ); ?>" alt="">
                            <?php $popap2_p4 = get_theme_mod( 'popup2-item4', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p4 ); ?>" alt="">
                            
                          </div>
                          <div class="popup-case-study">
                            <p class="popup-details">
                            <?php echo get_theme_mod('popuptext4', 'This is a default value This is a default value') ?>
                               
                            </p>
                                 
                            
                          </div>                        
                                </div>
                        </div>
                 
                       <div id="overlay">
                        
                       </div>
                        <!---popup-close-->
                          </div>
                      
              </div>
  <?php endif; ?>
  <?php if ( true == get_theme_mod( 'item5', 'on' ) ) : ?>
    <div class="portfolio-item" id="active">
              <div class="portfolio-image5">
              </div>
              <?php $image_p5 = get_theme_mod( 'image-item5', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image5{
              background: url('<?php echo esc_url( $image_p5 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
                <div class="work-detail">
                <div class="gok">
                <?php $icon1_p5 = get_theme_mod( 'icon1-item5', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p5 ); ?>" alt=""> 
                <?php $icon2_p5 = get_theme_mod( 'icon2-item5', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p5 ); ?>" alt="">
                <?php $icon3_p5 = get_theme_mod( 'icon3-item5', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p5 ); ?>" alt="">     
              </div>
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
             <!---modalopen-->
                   <div class="modalpopup modal" id="modal">
                             <div class="modal-header">
                              <h3 class="popup-title">Case Study</h3>
                              <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                             </div>
                        <div class="modal-content">
                        
                        <div class="popup-images">
                          <?php $popap1_p5 = get_theme_mod( 'popup1-item5', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p5 ); ?>" alt="">
                            <?php $popap2_p5 = get_theme_mod( 'popup2-item5', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p5 ); ?>" alt="">
                            
                          </div>
                          <div class="popup-case-study">
                            <p class="popup-details">
                            <?php echo get_theme_mod('popuptext5', 'This is a default value This is a default value') ?>
                               
                            </p>
                                 
                            
                          </div>                        
                                </div>
                        </div>
                 
                       <div id="overlay">
                        
                       </div>
                        <!---popup-close-->
                          </div>
                      
              </div>
  <?php endif; ?>
  <?php if ( true == get_theme_mod( 'item6', 'on' ) ) : ?>
    <div class="portfolio-item" id="active">
              <div class="portfolio-image6">
              </div>
              <?php $image_p6 = get_theme_mod( 'image-item6', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
           <style>
            .portfolio-image6{
              background: url('<?php echo esc_url( $image_p6 ); ?>');
              background-size: cover;
              background-position: center center;
            }
           </style>
              <div class="work-detail">
                <div class="gok">
                <?php $icon1_p6 = get_theme_mod( 'icon1-item6', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon1_p6 ); ?>" alt=""> 
                <?php $icon2_p6 = get_theme_mod( 'icon2-item6', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
                <img class="gokl" src="<?php echo esc_url( $icon2_p6 ); ?>" alt="">
                <?php $icon3_p6 = get_theme_mod( 'icon3-item6', get_template_directory_uri() . '/assets/images/icon.png' ); ?>
               <img class="gokl" src="<?php echo esc_url( $icon3_p6 ); ?>" alt="">     
              </div>
              
               
             <!--popup-->
             <button id="popup" data-modal-target="#modal" class="popupbutton popup pop btn">Details</button>
             <!---modalopen-->
                   <div class="modalpopup modal" id="modal">
                             <div class="modal-header">
                              <h3 class="popup-title">Case Study</h3>
                              <button data-close-button class="close-button"><i class='bx bx-x'></i></button>
                             </div>
                        <div class="modal-content">
                        
                        <div class="popup-images">
                          <?php $popap1_p6 = get_theme_mod( 'popup1-item6', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                            <img class="popup-img-mega" src="<?php echo esc_url( $popap1_p6 ); ?>" alt="">
                            <?php $popap2_p6 = get_theme_mod( 'popup2-item6', get_template_directory_uri() . '/assets/images/demo.png' ); ?>
                              <img class="popup-img-mega" src="<?php echo esc_url( $popap2_p6 ); ?>" alt="">
                            
                          </div>
                          <div class="popup-case-study">
                            <p class="popup-details">
                            <?php echo get_theme_mod('popuptext6', 'This is a default value This is a default value') ?>
                               
                            </p>
                                 
                            
                          </div>                        
                                </div>
                        </div>
                 
                       <div id="overlay">
                        
                       </div>
                        <!---popup-close-->
                          </div>
                      
              </div>
            </div>
          </div>
  <?php endif; ?>
            
            
              
              
              
            

          
        </section>