<?php
/**
* The Template for loop portfolio link post format.
*
* @package WordPress
* @subpackage Oslo
* @since Oslo 1.1.2
*/
$thmlvPortfolioSize = get_post_meta($post->ID, '_oslo_portfolio_size', true);
$featured = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$url = oslo_addhttp(get_post_meta($id, '_oslo_link', true));
?>
<a href="<?php echo $url['url'] ?>" id="post-<?php the_ID(); ?>"  <?php post_class('thmlvMasonryPortfolio '.$thmlvPortfolioSize); ?> target="_blank">
	<div class="thmlvMasonryTitle">
	<?php
	echo oslo_switch_loop_title($post->ID, FALSE);
	echo oslo_post_categories($post->ID, 'skills', FALSE);
	?>
	</div>
	<div class="thmlvMasonryHoverWrap">
		<div class="thmlvMasonryShadows">
			<div class="thmlvMasonryHover" style="background-image: url('<?php echo esc_url($featured[0]); ?>');"></div>
		</div>
	</div>
</a>