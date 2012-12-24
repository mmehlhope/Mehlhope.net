<?php
/*
Template Name: Single Post
*/
	include(TEMPLATEPATH . '/head.php');
?>
<body role="document">
    
    <?php get_header(); ?>

    <div id="content-wrapper" class="clearfix">

        <section class="main" role="main">
			<!-- Start the Loop. -->
			<?php while ( have_posts() ) : the_post(); ?>
            <article role="article">
    
			    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			    <section class="fullArticle">
			        <?php the_content(); ?>
			    </section>

			</article>

			<?php endwhile; ?>
            
        </section>
            
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>

    </div>
</body>
</html>