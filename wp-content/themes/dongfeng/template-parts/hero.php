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
?>


<section class="generic-hero">
    <div class="generic-hero__overlay"></div>
    <picture class="generic-hero__image">
        <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/serviss-banner-1440x915.jpg" media="(min-width: 1200px)">
        <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/serviss-banner-1200x763.jpg" media="(min-width: 992px)">
        <source srcset="https://dongfengwess.lv/wp-content/uploads/2024/11/serviss-banner-mob.jpg" media="(min-width: 768px)">
        <img decoding="async" src="https://dongfengwess.lv/wp-content/uploads/2024/11/serviss-banner-mob.jpg" alt="Mechanic with tablet inspecting car at service center">
    </picture>
    <div class="generic-hero__content">
        <h1 class="generic-hero__title">Authorised Dongfeng Workshop</h1>
        <p class="generic-hero__text">Comprehensive vehicle services performed by certified technicians using genuine parts and modern diagnostic equipment.</p>
        <a href="#booking" class="button button--light">Book an appointment</a>
        <div class="generic-hero__action">
            <button class="generic-hero__action-btn"></button>
        </div>
    </div>
</section>