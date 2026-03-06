<?php
/**
 * Template Name: Simple Page
 * Simple page template used for privacy policy, terms of services pages
 *
 * @package WordPress
 * @subpackage Dongfeng Lietuva
 * @since Dongfeng Lietuva 1.0
 */

$main_fields = get_field_objects(10);

get_header('', ['main_data' => $main_fields]);

?>

<main id="site-content" class="simple-page">

	<div class="container">
		<?php the_content(); ?>
	</div>
	
</main>

<?php
get_footer();
