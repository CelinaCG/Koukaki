<?php

get_header();
?>

    <main id="primary" class="site-main">
        <!-- Vidéo -->
        <section class="banner">
            <!-- Parallaxe de la vidéo -->
            <!-- 806 px de hauteur sur 1440 px de largeur -->
            <video id="background-video" autoplay loop muted>
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/video-banniere.mp4'; ?>" type="video/mp4">
            <!-- Appel du thème enfant via get_template_directory_uri -->
            <img src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="bannière">
            </video>
            <!-- Position du logo à 300px par rapport au haut de page. -->
            <!-- Déplacement vers le bas ou le haut de 150px via le scroll à partir de la position initiale du logo -->
            <img class="logo" data-0="top:300px;" data-150="top:460px;" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
       
        
        <section id="#story" class="story">
            <!-- Classe pour séparer le titre et l'arrière-plan -->
            <h2 class="titre-wrapper"><div class="section-title">L'histoire</div></h2>

            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php
                    get_template_part( 'template-parts/personnages', '' );
                    ?>
                </div>
            </article>
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <!-- Groupe de nuages -->
                <!-- Div pour Observer -->
                <div class="cloud-wrapper">
                    <div class="cloud">
                        <img class="small_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="image petit nuage">
                        <img class="big_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="image grand nuage">
                    </div>
                </div>
            </article>
        </section>


        <section id="studio">
            <!-- Classe pour séparer le titre et l'arrière-plan -->
            <h2 class="studio-wrapper"><div class="studio-title">Studio Koukaki</div></h2>
 
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnue, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->

    <script src= 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
    <script>
        var s = skrollr.init();
    </script>


<?php
get_footer();
