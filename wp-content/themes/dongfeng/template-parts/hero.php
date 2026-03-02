<?php
/**
 * The default template for displaying Hero section
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */


$image = get_field('hero_image'); 

?>

<section class="generic-hero">
    <div class="generic-hero__overlay"></div>
    <?php if ($image): ?>
    <picture class="generic-hero__image">
        <source srcset="<?php echo esc_url($image['sizes']['2048x2048']); ?>" media="(min-width: 1200px)">
        <source srcset="<?php echo esc_url($image['sizes']['post-thumbnail']); ?>" media="(min-width: 1024px)">
        <source srcset="<?php echo esc_url($image['sizes']['large']); ?>" media="(min-width: 768px)">
        <img 
            src="<?php echo esc_url($image['sizes']['medium_large']); ?>" 
            alt="<?php echo esc_attr($image['alt']); ?>"
            decoding="async"
            loading="lazy"
        >
    </picture>
    <?php endif; ?>
    <div class="generic-hero__content">
        <h1 class="generic-hero__title"><?php echo get_field('hero_title') ?></h1>
        <div class="generic-hero__text"><?php echo get_field('hero_text') ?></div>
        <?php 
            $button = get_field('hero_button');
            if($button) { ?><a href="<?php echo $button['url'] ?>" class="button button--light"><?php echo $button['title'] ?></a><?php }
        ?>
        <div class="generic-hero__action">
            <button class="generic-hero__action-btn"></button>
        </div>
    </div>
</section>