<article>
    <div class="news__card">
        <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__img">
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail() ?>
            <?php else: ?>
            <img width="250" height="250" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mO8dOlyPQAH7QL4Bgm9FAAAAABJRU5ErkJggg==">
            <?php endif ?>
        </a>
        <div class="news__content">
            <div class="news__category">
                <?php
                $categories = get_the_category();
                if (!empty($categories)):
                ?>
                <a class="news__tag" href="<?= get_term_link($categories[0]) ?>">
                    <?= $categories[0]->name ?>
                </a>
                <?php endif ?>
                <p class="news_date">
                    <?= get_the_date() ?>
                </p>
            </div>
            <a class="news__title" href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </div>
    </div>
</article>