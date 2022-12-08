<?php
$networks = [
    'youtube' => 'Youtube',
    'linkedin' => 'Linkedin',
    'instagram' => 'Instagram'
];
?>
<div class="footer__social">
    <?php foreach ($networks as $name => $label) : ?>
        <?php if (!empty($instance[$name])) : ?>
            <a href="<?= esc_url($instance[$name]) ?>" title="<?= sprintf(esc_attr('Nous suivre sur %s', 'arthem'), $label); ?>" target="_blank">
            <i class="fa-brands fa-<?= $name ?>"></i>
            </a>
        <?php endif ?>
    <?php endforeach; ?>
</div>
<div class="footer__credits"><?= esc_html($instance['credits']) ?></div>