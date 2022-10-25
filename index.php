<?php get_header(); ?>

<div class="top-img"></div>

<div class="inner">
    <div class="content">
<!--       <span class="material-icons-two-tone">rocket_launch</span>
          <h2>ブログのテーマ作り、①からスタートします!!</h2> -->
        <h1 class="blog_list" style="text-align: center; margin-top: 32px;">投稿一覧</h1>
        <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail('thumbnail'); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
            <?php endif; ?>
            <div class="blog_list_content">
              <div class="blog_date">
                <span catetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                  <?php echo get_the_date(); ?>
                </span>
              </div>
              <div class="blog_title">
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
            <div class="blog_category">
              <p><?php echo get_the_category()[0]->name; ?></p>
            </div>
          </li>
          <?php endwhile; endif; ?>
        </ul>
<!--         <div class="text">
        </div> -->


    </div>

</div>

<?php get_footer(); ?>

</body>
</html>

