<?php get_header(); ?>
<div class="body">
    <main role="main" class="main">
    <?php while ( have_posts() ) : the_post(); ?>

        <article class="article article--page" id="post-<?php the_ID(); ?>">

            <header class="page-header article-header">
                <h1 class="page-header__text page-header__text--main"><?php the_title(); ?></h1>
            </header>

            <div class="page-content article-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>
    </main>
</div>
<?php get_footer(); ?>
