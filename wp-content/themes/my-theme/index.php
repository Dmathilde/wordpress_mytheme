<?php get_header(); ?>

<div class="container">


<?php
if ( have_posts() ) {
  while ( have_posts() ) {
      
      $banner_background_image = get_field('banner_background_image');
      $conf_img = get_field('conf_img');
    
        
      
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
        <div class="noix" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">
        <div class="contenu1">
            <p id="p1"><?php the_field('banner_baseline'); ?></p>
            <p id="p2"><?php the_field('titre_marron_'); ?></p>
            <p id="p3"><?php the_field('titre_vert_'); ?> </p>
            <input type="button" value="S'incrire aux rencontres"/>
        </div>
    </div>




    
    
    <div class="conf" id="grandtitre">
        <p id="p4"><?php the_field('conference'); ?></p>
        <p id="p5"><?php the_field('la_conference'); ?></p>
    </div>
    






    
    <div class="image" 
     style="background-image: url(<?php echo $conf_img['url']; ?>)">
    </div>







<section class="num3" style="background-image: url(<?php echo $conference_image['url']; ?>)"></section>





    

<section class="num4">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>
        /assets/img/image5.png">
    </div>
</section>




    
    
  
    
<?php

  }
}
?>
    

</div>

<?php get_footer(); ?>