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
                    <!-- <h2><?php the_title(); ?></h2> -->
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>

                    <?php the_content(); ?>
                </article>
                <?php } ?>
            </section>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 p-3">

            <?php
                    $newsArgs = array( 'post_type' => 'noticias', 'posts_per_page' => 2);

                    $newsLoop = new WP_Query( $newsArgs );

                    while ( $newsLoop->have_posts() ) : $newsLoop->the_post();              ?>
            <div class="card mb-3">
                <div class="card-body ">
                    <h2 class="card-header"><a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();

?>