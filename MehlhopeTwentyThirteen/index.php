<?php
/*
Template Name: Index
*/
	include(TEMPLATEPATH . '/head.php');
?>
<body role="document">
    
    <?php get_header(); ?>

    <div id="content-wrapper" class="clearfix">

        <section class="main" role="region">
			<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article role="article">
    
			    <h2 role="heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			    <section class="summary">
			        <?php the_excerpt(); ?>
			    </section>

			    <section class="fullArticle">
			        <?php the_content("Read more"); ?>
			    </section>

			</article>

				<?php endwhile; ?>
				
				<div class="post-navigation clearfix">
					<?php next_posts_link('Older Posts') ?>
                    <?php previous_posts_link('Newer Posts') ?>
				</div>

				<?php else: ?>

				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<article>
					<p>Sorry, no posts matched your criteria.</p>
				</article>

			<!-- REALLY stop The Loop. -->
			<?php endif; ?>
            
        </section>
            
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>

    </div>
</body>
</html>