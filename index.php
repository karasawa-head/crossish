<?php get_header(); ?>
<div class="body">
    <main role="main" class="main">
    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-header__text page-header__text--main"><?php the_archive_title(); ?></h1>
            <?php
                $page_subtitle = get_post_meta($post->ID, 'page_subtitle', true);
                if ( !empty($page_subtitle) ) :
            ?>
            <span class="page-header__text page-header__text--sub"><?php echo esc_html($page_subtitle); ?></span>
            <?php endif; ?>
        </header>

        <div class="page-content">
        <?php while ( have_posts() ) : the_post(); ?>

            <article class="article article--archive">
                <h2 class="article-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="article-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
    <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>
