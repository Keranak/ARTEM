<? get_header(); ?>

<section class="section">
    <div class="container">
        <div class="error__container grid">
            <img src="<?= get_template_directory_uri() . '/assets/img/404.svg' ?>" alt="404" class="error__img">
            <div class="error__content">
                <h1 class="section__title error__title">404</h1>
                <p class="error__description">Page non trouvée</p>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>