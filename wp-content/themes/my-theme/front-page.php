<?php get_header(); ?>
<div class="contient">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
      $banner_background_image = get_field('banner_background_image');
      $conference_image = get_field('conference_image');

    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>











      
<div class="numero1" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">>
    <div id="infos1">
        <p><?php the_field('banner_baseline'); ?></p>
        <h1 class="titre"><?php the_field('titre_marron_'); ?></h1>
        <h1 class="titre2"><?php the_field('titre_vert_'); ?></h1>
        <button><?php the_field('lien_dinscription_');?></button>
    </div>
</div>
    












    
<section class="num2">
    <div>
        <h1><?php the_field('conference'); ?></h1>
        <p><?php the_field('la_conference'); ?></p>
        
    </div>
</section>

















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