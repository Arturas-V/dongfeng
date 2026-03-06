<?php
/**
 * The template for displaying the 404 template
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
		<h1><?php _e( 'Puslapis nerastas', 'twentytwenty' ); ?></h1>

		<div class="intro-text">
			<p><?php _e( 'Puslapis kurio ieškote nėrastas.', 'twentytwenty' ); ?></p>
		</div>

	</div>
	
</main>

<?php
get_footer();
