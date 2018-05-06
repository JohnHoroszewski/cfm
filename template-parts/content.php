<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clever_Fox_Media
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			$pBanner = get_field( 'top_banner_image' ); ?>
			<div class="page-banner" style="background-image:url('<?php echo $pBanner[ 'url' ]; ?>');">
				<div class="constrain">
					<div class="big-title">Post</div>
				</div>
			</div>
			
			<section class="page-intro p50">
				<div class="constrain">
					<div class="intro-block flexxed">
						<h1>
							<?php the_title(); ?>
						</h1>
						<div class="entry-meta">
							<div class="meta postedon">
								<span class="meta-info-title">Posted On:</span> <?php echo get_the_date(); ?>
							</div>
							<div class="meta postauthor">
								<span class="meta-info-title">By:</span> <?php the_author(); ?>
							</div>
							<div class="meta categories">
								<span class="meta-info-title">Posted In:</span><ul class="meta-cat-list"><?php wp_list_categories( 'title_li=' ); ?></ul>
							</div>
							<div class="meta sharethis">
								<span class="meta-info-title">Share:</span> <a class="social-icon facebook" href=""><i class="white-text fab fa-facebook-f"></i></a>
								<a class="social-icon twitter" href=""><i class="white-text fab fa-twitter"></i></a>
								<a class="social-icon google" href=""><i class="white-text fab fa-google"></i></a>
								<a class="social-icon linkedin" href=""><i class="white-text fab fa-linkedin-in"></i></a>
								<a class="social-icon email" href="mailto:contact@cleverfoxmedia.net"><i class="white-text fas fa-envelope"></i></a>
							</div>
						</div><!-- .entry-meta -->
					</div>
				</div><!-- .constrain -->
			</section><!-- .page-intro -->
			<div class="constrain">
				<?php cfm_post_thumbnail(); ?>
			</div><!-- .contrain -->
			<div class="entry-content constrain sm">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cfm' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cfm' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
		<?php else : ?>
		<!-- Blog Listing -->
			<div class="constrain">
				<div class="blog-post flexxed">
					<div class="post-text">
						<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn-lg accent-bg">Read More</a>
					</div>
					<div class="post-featured">
						<?php cfm_post_thumbnail(); ?>
					</div>
				</div><!-- .blog-post.flexxed -->
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->


</article><!-- #post-<?php the_ID(); ?> -->
