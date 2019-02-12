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
            while(have_posts()) {
              the_post(); ?>
                <article <?php post_class(); ?>>
                    <div class="card mb-4">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
                            <h2 class="card-title mt-0"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
                        </div>
                        
                    </div>
                </article>
                <?php } ?>
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
                    <a class="twitter-timeline" data-height="500"
                        href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
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