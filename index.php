<?php get_header(); ?>

<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="articles">
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<article class="clearfix">
						
						<header>
							<?php
								// Only show the comments link if comments are allowed and it's not password protected
							
								if (comments_open() && !post_password_required()) { 
									comments_popup_link('0', '1', '%', 'article-meta-comments');
								}
							?>
							
							<p class="article-meta-categories"><?php the_category(' &nbsp;/&nbsp; '); ?></p>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<p class="article-meta-extra"><?php the_time(get_option('date_format')); ?> by <?php the_author_posts_link(); ?></p>
							
						</header>
						
						<?php if (has_post_thumbnail()) : ?>
						<figure class="article-preview-image">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</figure>
						<?php endif; ?>
						
						<p><?php the_content('Read More &raquo;'); ?></p>
						
					</article>
					<hr class="fancy-hr" />
					<?php endwhile; else : ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('no-posts'); ?>>

							<h1><?php _e('No posts were found.', 'adaptive-framework'); ?></h1>
							
						</article>
					<?php endif; ?>


					
					<div class="articles-nav clearfix">
						<p class="articles-nav-prev"><?php previous_posts_link(__('Newer Posts &raquo;', 'adaptive-framework')); ?></p>
						<p class="articles-nav-next"><?php next_posts_link(__('&laquo; Older Posts', 'adaptive-framework')); ?> </p>
						
					</div> <!-- end articles-nav -->
					
				</div> <!-- end articles -->
				
			</div> <!-- end span9 -->
			
			<aside class="span3 main-sidebar">
				
				<?php get_sidebar();?>
				

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->
	
	
	
	

<?php get_footer();?>