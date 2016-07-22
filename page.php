<?php get_header(); ?>
<div class="body">
    <main role="main" class="main">
    <?php while ( have_posts() ) : the_post(); ?>

        <article class="article article--page" id="post-<?php the_ID(); ?>">

            <header class="page-header article-header">
                <h1 class="page-header__text page-header__text--main"><?php the_title(); ?></h1>
                <?php
                    $page_subtitle = get_post_meta($post->ID, 'page_subtitle', true);
                    if ( !empty($page_subtitle) ) :
                ?>
                <span class="page-header__text page-header__text--sub"><?php echo esc_html($page_subtitle); ?></span>
                <?php endif; ?>
            </header>

            <div class="page-content article-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>
    </main>
</div>
<?php get_footer(); ?>
