<?php get_header(); ?>

<!-- Page Content -->
<div class="container mt-5 content">
    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- <h1 class="my-4">
          <small></small>
        </h1> -->

            <section class="content list_page">

                <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
                    
				// get_template_part( 'template-parts/content/content', 'page' );
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        

                        <div class="entry-content">
                            <?php
                            the_content();

                            ?>
                        </div><!-- .entry-content -->

                        
                    </article><!-- #post-<?php the_ID(); ?> -->

                <?php
				

			endwhile; // End of the loop.
			?>
            </section>



            <!-- Pagination -->
            <!-- <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul> -->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


            <div class="card">
                <h5 class="card-header">Twitter Feed GESAD</h5>
                <div class="card-body">
                    <a class="twitter-timeline" href="https://twitter.com/GESAD6?ref_src=twsrc%5Etfw">Tweets by GESAD</a> 
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>

        </div>



    </div>
    <!-- /.row -->
    <div class="pages text-left col-6">
        <?php previous_posts_link( __( "<< Newer posts", 'wpcurso' ) ); ?>
    </div>
    <div class="pages text-right col-6">
        <?php next_posts_link( __( "Older posts >>", 'wpcurso' ) ); ?>
    </div>

</div>
<!-- /.container -->

<?php get_footer();

?>