<?php get_header() ?>

<?php while (have_posts()):
    the_post(); ?>
<main>
    <section class="section other__page">
        <div class="container">
            <h1 class="section__title">
                <?php the_title() ?>
            </h1>

            <?php
    the_content()
                ?>
        </div>
    </section>
</main>
<?php endwhile; ?>

<?php get_footer() ?>