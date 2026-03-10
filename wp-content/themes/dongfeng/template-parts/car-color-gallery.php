<?php
/**
 * The default template for displaying cars color galleries
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

?>


<section class="car-gallery centered">
    <div class="container">
        <hr>
        <?php echo get_field('colours_title_and_tagline'); ?>
    </div>
    
    <div class="car-gallery__slider" data-car-gallery>
        <div class="car-gallery__viewport flex flex-center">
            <?php if ($post->post_name == 'dongfeng-box') { ?>
            <picture class="car-gallery__viewport--background">
                <source srcset="/wp-content/uploads/2026/03/box-background-1440x810-1.png" media="(min-width: 1400px)">
                <source srcset="/wp-content/uploads/2026/03/box-background-1440x810-1-1200x675.png" media="(min-width: 1200px)">
                <source srcset="/wp-content/uploads/2026/03/box-background-1440x810-1-1024x576.png" media="(min-width: 992px)">
                <source srcset="/wp-content/uploads/2026/03/box-background-1440x810-1-768x432.png" media="(min-width: 768px)">
                <img decoding="async" src="/wp-content/uploads/2026/03/box-background-1440x810-1-768x432.png" alt="">
            </picture>
            <?php } ?>
            <?php if ($post->post_name == 'forthing-t5-evo') { ?>
            <picture class="car-gallery__viewport--background">
                <source srcset="/wp-content/uploads/2026/03/t5-evo-background.jpg" media="(min-width: 1400px)">
                <source srcset="/wp-content/uploads/2026/03/t5-evo-background-1200x675.jpg" media="(min-width: 1200px)">
                <source srcset="/wp-content/uploads/2026/03/t5-evo-background-1024x576.jpg" media="(min-width: 992px)">
                <source srcset="/wp-content/uploads/2026/03/t5-evo-background-768x432.jpg" media="(min-width: 768px)">
                <img decoding="async" src="/wp-content/uploads/2026/03/t5-evo-background-768x432.jpg" alt="">
            </picture>
            <?php } ?>
            <?php if ($post->post_name == 'forthing-u-tour') { ?>
            <picture class="car-gallery__viewport--background">
                <source srcset="/wp-content/uploads/2026/03/utour-background-2.jpg" media="(min-width: 1400px)">
                <source srcset="/wp-content/uploads/2026/03/utour-background-2-1200x675.jpg" media="(min-width: 1200px)">
                <source srcset="/wp-content/uploads/2026/03/utour-background-2-1024x576.jpg" media="(min-width: 992px)">
                <source srcset="/wp-content/uploads/2026/03/utour-background-2-768x432.jpg" media="(min-width: 768px)">
            </picture>
            <?php } ?>
            <?php if ($post->post_name == 'voyah-dream' || 'voyah-free') { ?>
            <picture class="car-gallery__viewport--background">
                <source srcset="/wp-content/uploads/2026/03/dream-background.jpg" media="(min-width: 1400px)">
                <source srcset="/wp-content/uploads/2026/03/dream-background-1200x675.jpg" media="(min-width: 1200px)">
                <source srcset="/wp-content/uploads/2026/03/dream-background-1024x576.jpg" media="(min-width: 992px)">
                <source srcset="/wp-content/uploads/2026/03/dream-background-768x432.jpg" media="(min-width: 768px)">
                <img decoding="async" src="/wp-content/uploads/2026/03/dream-background-768x432.jpg" alt="">
            </picture>
            <?php } ?>
            <?php if ($post->post_name == 'mhero') { ?>
            <picture class="car-gallery__viewport--background">
                <source srcset="/wp-content/uploads/2026/03/mhero-conf-background.jpg" media="(min-width: 1400px)">
                <source srcset="/wp-content/uploads/2026/03/mhero-conf-background-1200x675.jpg" media="(min-width: 1200px)">
                <source srcset="/wp-content/uploads/2026/03/mhero-conf-background-1024x576.jpg" media="(min-width: 992px)">
                <source srcset="/wp-content/uploads/2026/03/mhero-conf-background-768x432.jpg" media="(min-width: 768px)">
                <img decoding="async" src="/wp-content/uploads/2026/03/mhero-conf-background-768x432.jpg" alt="">
            </picture>
            <?php } ?>
        </div>
    </div>
    <div class="car-gallery__tabs flex flex-center">
        <?php if ($post->post_name == 'dongfeng-box') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('geltona')['url'] ?>" data-color="rgba(185,227,78,0.65)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-green-color-2.png" alt="Dongfeng BOX geltona">
                <span>Geltona</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('melyna')['url'] ?>" data-color="rgba(149,177,191,0.65)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-blue-color-2.png" alt="Dongfeng BOX mėlyna">
                <span>Mėlyna</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balta')['url'] ?>" data-color="rgba(0,0,0,0.35)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-white-color-2.png" alt="Dongfeng BOX Balta">
                <span>Balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilka')['url'] ?>" data-color="rgba(170,180,191,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-grey-color-2.png" alt="Dongfeng BOX Pilka">
                <span>Pilka</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('geltona_su_balta')['url'] ?>" data-color="rgba(185,227,78,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-greenwhite-color-2.png" alt="Dongfeng BOX Geltona su balta">
                <span>Geltona su balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('violetine_su_balta')['url'] ?>" data-color="rgba(152,93,173,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-violetwhite-color-2-1.png" alt="Dongfeng BOX Violetinė su balta">
                <span>Violetinė su balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('melyna_su_balta')['url'] ?>" data-color="rgba(149,177,191,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-bluewhite-color-2.png" alt="Dongfeng BOX Mėlyna su balta">
                <span>Mėlyna su balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('raudona')['url'] ?>" data-color="rgba(221,82,82,0.29)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-redwhite-color-2.png" alt="Dongfeng BOX Raudona">
                <span>Raudona</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('rozine')['url'] ?>" data-color="rgba(221,126,126,0.3)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-ROSEwhite-color-2.png" alt="Dongfeng BOX Rožine">
                <span>Rožine</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'dongfeng-mage') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgb(0,0,0)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Dongfeng MAGE Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balta')['url'] ?>" data-color="rgb(255,255,255)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Dongfeng MAGE Balta">
                <span>Balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balta_su_juodu_stogu')['url'] ?>" data-color="rgb(255,255,255)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-titan-2.png" alt="Dongfeng MAGE Balta su juodu stogu">
                <span>Balta su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilka')['url'] ?>" data-color="rgb(160,160,160)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-beige-color-2.png" alt="Dongfeng MAGE Pilka">
                <span>Pilka</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilka_su_juodu_stogu')['url'] ?>" data-color="rgb(160,160,160)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-blackout-color.png" alt="Dongfeng MAGE Pilka su juodu stogu">
                <span>Pilka su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('melyna')['url'] ?>" data-color="rgb(30,115,190)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/df6-blue-color-2.png" alt="Dongfeng MAGE Mėlyna">
                <span>Mėlyna</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'dongfeng-huge') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('balta')['url'] ?>" data-color="rgb(255,255,255)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Dongfeng HUGE Balta">
                <span>Balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('juoda')['url'] ?>" data-color="rgb(0,0,0)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-black-color-2.png" alt="Dongfeng HUGE Juoda">
                <span>Juoda</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilka_su_juodu_stogu')['url'] ?>" data-color="rgb(173,173,173)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-blackout-color.png" alt="Dongfeng HUGE Pilka su juodu stogu">
                <span>Pilka su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('tamsiai_melyna')['url'] ?>" data-color="rgb(31,68,163)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/df6-blue-color-2.png" alt="Dongfeng HUGE Tamsiai mėlyna">
                <span>Tamsiai mėlyna</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'forthing-t5-evo') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('balta_su_juodu_stogu')['url'] ?>" data-color="rgba(10,10,10,0.35)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt=" Forthing T5 EVO Balta su juodu stogu">
                <span>Balta su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('raudona_su_juodu_stogu')['url'] ?>" data-color="rgba(221,51,51,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-red-color-2.png" alt=" Forthing T5 EVO Raudona su juodu stogu">
                <span>Raudona su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab " data-car-image="<?php echo get_field('juoda')['url'] ?>" data-color="rgba(255,255,255,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt=" Forthing T5 EVO Juoda">
                <span>Juoda</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zalia_su_juodu_stogu')['url'] ?>" data-color="rgba(31,182,198,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-lblue-color-2.png" alt=" Forthing T5 EVO Žalia su juodu stogu">
                <span>Žalia su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('tamsiai_zalia')['url'] ?>" data-color="rgba(75,116,130,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-greenblue-color-2.png" alt=" Forthing T5 EVO Tamsiai žalia">
                <span>Tamsiai žalia</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('smelio_pilka_su_juodu_stogu')['url'] ?>" data-color="rgba(124,124,124,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-beige-color-2.png" alt=" Forthing T5 EVO Smėlio pilka su juodu stogu">
                <span>Smėlio pilka su juodu stogu</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('tamsiai_pilka')['url'] ?>" data-color="rgba(10,10,10,0.4)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-grey-color-3.png" alt=" Forthing T5 EVO Tamsiai pilka">
                <span>Tamsiai pilka</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'forthing-u-tour') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juoda')['url'] ?>" data-color="rgba(255,255,255,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Forthing U Tour Juoda">
                <span>Juoda</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balta')['url'] ?>" data-color="rgba(10,10,10,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Forthing U Tour Balta">
                <span>Balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('tamsiai_zalia')['url'] ?>" data-color="rgba(0,112,124,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-greenblue-color-2.png" alt="Forthing U Tour Tamsiai žalia">
                <span>Tamsiai žalia</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zalias_ir_juoda')['url'] ?>" data-color="rgba(78,178,166,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-lblue-color-2.png" alt="Forthing U Tour Žalias ir juoda">
                <span>Žalias ir juoda</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'forthing-v9') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgb(25,25,25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Forthing V9 Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab " data-car-image="<?php echo get_field('balto_metalo')['url'] ?>" data-color="rgb(255,255,255)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Forthing V9 Balto metalo">
                <span>Balto metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('tamsiai_purpurinio_metalo')['url'] ?>" data-color="rgb(41,0,73)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-dream-violet-color-2.png" alt="Forthing V9 Tamsiai purpurinio metalo">
                <span>Tamsiai purpurinio metalo</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'forthing-s7') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgb(0,0,0)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Forthing S7 Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zydras')['url'] ?>" data-color="rgba(49,148,214,0.95)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/box-blue-color-2.png" alt="Forthing S7 Žydras">
                <span>Žydras</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('raudona')['url'] ?>" data-color="rgb(221,51,51)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-red-color-2.png" alt="Forthing S7 Raudona">
                <span>Raudona</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balta')['url'] ?>" data-color="rgb(255,255,255)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Forthing S7 Balta">
                <span>Balta</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zalia')['url'] ?>" data-color="rgb(105,191,59)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/free-green-color-2.png" alt="Forthing S7 Žalia">
                <span>Žalia</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'voyah-dream') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgba(255,255,255,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Voyha Dream Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balto_metalo')['url'] ?>" data-color="rgba(10,10,10,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Voyha Dream Balto metalo">
                <span>Balto metalo</span>
            </button>
            <button class="car-gallery__tabs-tab " data-car-image="<?php echo get_field('tamsiai_purpurinio_metalo')['url'] ?>" data-color="rgba(61,9,119,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-dream-violet-color-2.png" alt="Voyha Dream Tamsiai purpurinio metalo">
                <span>Tamsiai purpurinio metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('rozinio_metalo')['url'] ?>" data-color="rgba(183,168,126,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-dream-beige-color-2.png" alt="Voyha Dream Rožinio metalo">
                <span>Rožinio metalo</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'voyah-courage') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgba(0,0,0,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-black-color-2.png" alt="Voyha Courage Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('melyno_metalo')['url'] ?>" data-color="rgba(33,150,209,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-blue-color-2-1.png" alt="Voyha Courage Melyno metalo">
                <span>Mėlyno metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('balto_metalo')['url'] ?>" data-color="rgba(255,255,255,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-white-color-2.png" alt="Voyha Courage Balto metalo">
                <span>Balto metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zalio_metalo')['url'] ?>" data-color="rgba(185,224,168,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-green-color-2.png" alt="Voyha Courage Žalio metalo">
                <span>Žalio metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('rozinio_metalo')['url'] ?>" data-color="rgba(226,179,204,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-rose-color-2.png" alt="Voyha Courage Rožinio metalo">
                <span>Rožinio metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilko_metalo')['url'] ?>" data-color="rgba(193,193,193,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-grey-color-2.png" alt="Voyha Courage Pilko metalo">
                <span>Pilko metalo</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'mhero') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juoda_matine')['url'] ?>" data-color="rgba(0,0,0,0.3)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-blackout-color.png" alt="M-Hero Juoda matinė">
                <span>Juoda matinė</span>
            </button>
            <button class="car-gallery__tabs-tab " data-car-image="<?php echo get_field('pekino_zalia_matine')['url'] ?>" data-color="rgba(46,73,21,0.3)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-khaki-color.png" alt="M-Hero Pekino žalia matinė">
                <span>Pekino žalia matinė</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('pilka_matine')['url'] ?>" data-color="rgba(114,114,114,0.3)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/mhero-titan-2.png" alt="M-Hero Pilka matinė">
                <span>Pilka matinė</span>
            </button>
        <?php } ?>
        <?php if ($post->post_name == 'voyah-free') { ?>
            <button class="car-gallery__tabs-tab active" data-car-image="<?php echo get_field('juodo_metalo')['url'] ?>" data-color="rgba(255,255,255,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-black-color-2.png" alt="Voyah Free Juodo metalo">
                <span>Juodo metalo</span>
            </button>
            <button class="car-gallery__tabs-tab " data-car-image="<?php echo get_field('balto_metalo')['url'] ?>" data-color="rgba(10,10,10,0.25)" >
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/t5evo-white-color-2.png" alt="Voyah Free Balto metalo">
                <span>Balto metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('zalio_metalo')['url'] ?>" data-color="rgba(185,224,168,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-green-color-2.png" alt="Voyah Free Žalio metalo">
                <span>Žalio metalo</span>
            </button>
            <button class="car-gallery__tabs-tab" data-car-image="<?php echo get_field('sviesiai_melyno_metalo')['url'] ?>" data-color="rgba(33,150,209,0.25)">
                <img decoding="async" src="/wp-content/themes/dongfeng/assets/img/v-courage-blue-color-2-1.png" alt="Voyah Free Sviesiai melyno metalo">
                <span>Šviesiai mėlyno metalo</span>
            </button>
        <?php } ?>
    </div>
</section>