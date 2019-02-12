<?php get_header(); ?>

<!-- Page Content -->
<div class="container mt-5 content" >
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
                <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                <?php } ?>
            </section>



            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>

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

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();

?>