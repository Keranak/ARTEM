<?php get_header() ?>

<?php while (have_posts()):
    the_post(); ?>
<main>
    <section class="section news">
        <div class="container">
            <h1 class="section__title">
                <?php the_title() ?>
            </h1>
            <div class="news-single__meta">
                <?php
    $categories = get_the_category();
    if (!empty($categories)):
                ?>
                <a class="news__tag" href="<?= get_term_link($categories[0]) ?>">
                    <?= $categories[0]->name ?>
                </a>
                <?php endif ?>
                <div class="news__date">
                    <?= sprintf(__('Publié le %s à %s'), get_the_date(), get_the_time()) ?>
                </div>
            </div>
            </header>
            <div class="formatted">
                <?php if (has_post_thumbnail()): ?>
                <p>
                    <?= the_post_thumbnail('large'); ?>
                </p>
                <?php endif ?>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; ?>

<?php get_footer() ?>