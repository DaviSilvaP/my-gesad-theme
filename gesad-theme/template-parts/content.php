<article <?php post_class(); ?>>
    <div class="card mb-4">
        <div class="card-body">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
            <h2 class="card-title mt-0"><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <!-- <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p> -->
        </div>
        <div class="card-footer text-muted">
            <p>Posted by
                <?php the_author_posts_link(); ?> on
                <?php the_time('n.j.y'); ?> in
                <?php echo get_the_category_list(', '); ?>
            </p>
        </div>
    </div>
</article>

<!-- <div class="card-body">
                <img class="list_img" src="http://placehold.it/200x100" alt="Card image cap">
                <h2 class="card-title mt-0"><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h2>
		            <?php the_excerpt(); ?>
                <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
              </div>
              <div class="card-footer text-muted">
                <p>Posted by
                  <?php the_author_posts_link(); ?> on
                  <?php the_time('n.j.y'); ?> in
                  <?php echo get_the_category_list(', '); ?>
                </p>
              </div>
            </div> -->