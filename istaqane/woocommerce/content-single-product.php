<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>

<!-- start of breadcumb -->
<div class="wpo-breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="wpo-breadcumb-wrap">
				<h2><?php the_title();?></h2>
					<ul>
					<li><a href="<?php echo get_home_url();?>"><?php echo esc_html('Home');?></a></li>
					<li><?php the_title();?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end of breadcumb-->

<!-- start shop-single -->
<section class="wpo-shop-single-section section-padding">
	<div class="container">
		<div class="row">
		<div class="add_to_cart_notic">
		<?php
			/**
			 * Hook: woocommerce_before_single_product.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 */
			do_action( 'woocommerce_before_single_product' );

			if ( post_password_required() ) {
				echo get_the_password_form(); // WPCS: XSS ok.
				return;
			}
		?>
		</div>	

			<div class="col col-lg-6 col-12">
				<div class="shop-single-slider">
					<?php woocommerce_show_product_images(); ?>

					<?php
					$attachment_ids = $product->get_gallery_image_ids();
				
					foreach( $attachment_ids as $attachment_id ) {
						echo $image_link = wp_get_attachment_url( $attachment_id );
						?>
						<div class="slider-for">
							<div><img src="<?php echo $image_link; ?>" alt></div>
						</div>
						<div class="slider-nav">
						<div><img src="<?php echo $image_link; ?>" alt></div>
					</div>
						<?php
					//echo $image_link = wp_get_attachment_url( $attachment_id );
					}
				?>
				</div>
			</div>

			<div class="col col-lg-6 col-12">
				<div class="product-details">
					<h2><?php woocommerce_template_single_title(); ?></h2>
					<div class="product-rt">
						<div class="rating">
							<?php woocommerce_template_single_rating(); ?>
						</div>
					</div>
					<div class="price">
						<?php woocommerce_template_single_price(); ?>
					</div>
						<?php woocommerce_template_single_excerpt(); ?>
						<?php woocommerce_template_single_add_to_cart(); ?>
					
						<div class="tg-btm">
						<?php woocommerce_template_single_meta(); ?>
						</div>
				</div> <!-- end product details -->
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end of container -->
</section>
<!-- end of shop-single-->

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
