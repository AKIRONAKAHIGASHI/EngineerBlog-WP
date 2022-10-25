<?php get_header(); ?>

<div class="inner blog">
    <div class="content">
        <h2>Blog準備中</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          ここに表示部分が入ります。
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>
