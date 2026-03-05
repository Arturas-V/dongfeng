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
        <?php echo get_field('hero_title_and_title'); ?>
        <div class="generic-hero__action">
            <button class="generic-hero__action-btn"></button>
        </div>
    </div>
</section>