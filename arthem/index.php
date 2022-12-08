<?php get_header() ?>

<?php if (have_posts()): ?>
<?php if (is_home() && !is_front_page()): ?>
<section class="section">
    <div class="container">
        <h1 class="section__title">
            <?php if (is_category()): ?>
            <?php single_cat_title() ?>
            <?php elseif (is_search()): ?>
            <?= sprintf(__('Résultat pour "%s"'), get_search_query()); ?>
                <?php else: ?>
                <?php single_post_title() ?>
                <?php endif ?>
        </h1>
        <?php $blog_id = get_option("page_for_posts"); ?>
        <?php echo get_post($blog_id)->post_content; ?>
        <?php get_search_form(); ?>
        <?php if (have_posts()): ?>
        <?php while (have_posts()):
                the_post(); ?>
        <?php get_template_part('template-parts/post'); ?>
        <?php endwhile; ?>


        <?php else: ?>
        <p class="news__nopost">
            <?= __('Aucun post') ?>
        </p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php get_footer() ?>