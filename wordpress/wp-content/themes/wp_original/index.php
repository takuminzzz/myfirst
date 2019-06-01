<?php get_header(); ?>
    <section>
      <?php if(have_posts()): while(have_posts()): the_post();?>
        <article>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div>
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; endif; ?>

      <?php if( is_single() ): // 個別投稿の表示用(post:単数系) ?>
        <div class="post_link">
        <span class="left">
          <?php previous_post_link('%link','&lt;より古い記事'); ?>
        </span>
        <span class="right">
          <?php next_post_link('%link','より新しい記事&gt;'); ?>
        </span>
        </div>
      <?php endif; ?>

      <?php if( is_home() ): // ブログ投稿インデックスページ用(posts:複数形) ?>
        <div class="posts_link">
        <span class="left">
          <?php next_posts_link('&lt; より古い記事'); ?>
        </span>
        <span class="right">
          <?php previous_posts_link('より新しい記事 &gt;'); ?>
        </span>
        </div>
      <?php endif; ?>
    </section>
    <div id="news">
      <nav>
        <h2>新着情報</h2>
        <dl>
          <?php
          $newslist = get_posts( array( 'posts_per_page' => 5 ) );
          foreach( $newslist as $post ):
            setup_postdata( $post );
          ?>
          <dt><a href="<?php the_permalink(); ?>">
            <?php the_time('Y.n.j.'); ?>
            <?php the_title(); ?></a>
          </dt>
          <?php endforeach; ?>
        </dl>
      </nav>
    </div>
<?php get_footer(); ?>
