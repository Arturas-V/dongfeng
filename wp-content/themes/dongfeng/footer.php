<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

?>
			<footer id="site-footer" class="site-footer">
				<div class="site-footer__inner container">
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div class="site-footer__top">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div>
					<?php endif; ?>

					<div class="site-footer__top site-footer__top-second">

						<div class="site-footer__top-block">
							<p class="site-footer__title">Apie Mus</p>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary_4',
									'container'      => false,
									'menu_class'     => 'site-footer__menu'
								)
							);
							?>
							<br>
							<p class="site-footer__title">Savininkams</p>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary_3',
									'container'      => false,
									'menu_class'     => 'site-footer__menu'
								)
							);
							?>
						</div>

						<div class="site-footer__top-block">
							
							<p class="site-footer__title">Servisas ir Garantija</p>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary_2',
									'container'      => false,
									'menu_class'     => 'site-footer__menu'
								)
							);
							?>
							<br>
							<p class="site-footer__title">Pasiūlymai</p>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary_5',
									'container'      => false,
									'menu_class'     => 'site-footer__menu'
								)
							);
							?>
						</div>

						<div class="site-footer__top-block">
							<p class="site-footer__title">Modeliai</p>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'container'      => false,
									'menu_class'     => 'site-footer__menu site-footer__menu-models'
								)
							);
							?>
						</div>

					</div>

					<div class="site-footer__bottom">
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					<?php endif; ?>
						<div class="site-footer__social">
							<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
								<?php dynamic_sidebar( 'sidebar-3' ); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
