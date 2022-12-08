<?php get_header() ?>

<?php while (have_posts()):
    the_post() ?>
<main>
    <div class="container">
<h1>Rééquilibre,<br>L'enseignement responsable </h1>
    <section class="video-container">
        <iframe width="1100" height="900" src="https://www.youtube.com/embed/D2UcBgFw5U4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
</div>



    <section id="elearning" class="sections">
    <div id="cards-container">
    <div class="card">
        <h2 class="titleCard">70%</h2>
        <p><img class="imgCard" src="https://reequilibre-enseignement.fr/wp-content/uploads/2022/12/ordinateur.png"
                alt=""/></p>
    </div>
    <p class="textCard">70% d’augmentation de l’ <strong>E-learning</strong> depuis le covid.</p>
    <div class="card">
        <h2 class="titleCard">259 kg</h2>
        <p><img class="imgCard" src="https://reequilibre-enseignement.fr/wp-content/uploads/2022/12/ampoule.png"
                alt=""/></p>
    </div>
    <p class="textCard">Un ordinateur portable sur <strong>2 ans</strong> émet <strong>259 kg de CO2</strong>, soit un
        Paris-Barcelone en avion.
    </p>
    <div class="card">
        <h2 class="titleCard">38%</h2>
        <p><img class="imgCard"
                src="https://reequilibre-enseignement.fr/wp-content/uploads/2022/12/les-2-te╠ule╠uphones-proposition.png"
                alt=""/></p>
    </div>
    <p class="textCard"><strong>Émissions</strong> total mondiales provenant des équipements numériques. Seulement 32%
        pour les transports.</p>
    </div>

<!--    Texte invisible en Responsive-->
    <div id="text-container">
        <div class="textCardWeb-container"><p class="textCardWeb">70% d’augmentation de l’ <strong>E-learning</strong> depuis le covid.</p></div>
        <div class="textCardWeb-container"><p class="textCardWeb">Un ordinateur portable sur <strong>2 ans</strong> émet <strong>259 kg de CO2</strong>, soit un
            Paris-Barcelone en avion.</p></div>
        <div class="textCardWeb-container"><p class="textCardWeb"><strong>Émissions</strong> total mondiales provenant des équipements numériques. Seulement 32%
            pour les transports.</p></div>
    </div>

    <h2 class="has-text-align-center">Nos propositions</h2>

    <p class="has-text-align-center">Nous voulons mettre en place un systeme d’enseignement égalitaire entre numérique
        et méthode plus classique</p>

    <!--    ==================== SLIDER À AJOUTER ====================-->
            <!--Shortcode wordpress-->
        <?php 
        // [smartslider3 slider="3"]
        // Affiche le shortcode du slider

        echo do_shortcode('[smartslider3 slider="3"]');

        ?>


    <h2 class="has-text-align-center">Réalisez votre devis</h2>

    <div class="div-button"><button class="button"> 
        <a class="linkButton" href="https://reequilibre-enseignement.fr/devis/">
            Demandes de devis
        </a></button>
    </div>

    <h2 class="has-text-align-center">Actualités</h2>

    <p class="has-text-align-center">Nous vous proposons également
        de retourver toute l’actualité et
        les informations sur la sobriété numérique.</p>

    <div class="div-button">
        <button class="button"> <a class="linkButton" href="https://reequilibre-enseignement.fr/actualites/">
            Découvrez l'actualité 
        </a></button>
    </div>
</section>
</main>
<?php endwhile ?>
<?php get_footer() ?>