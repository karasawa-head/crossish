<?php get_header(); ?>
<div class="body">
    <main role="main" class="main">
    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-header__text page-header__text--main">検索結果： &quot;<?php echo esc_html( get_search_query() ); ?>&quot;</h1>
            <span class="page-header__text page-header__text--sub">Search Results</span>
        </header>

        <div class="page-content">
        <?php while ( have_posts() ) : the_post(); ?>

            <article class="article">
                <h2 class="article-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="article-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>
        <?php the_posts_pagination(); ?>
        </div>


    <?php else : ?>

        <header class="page-header">
            <h1 class="page-header__text page-header__text--main">検索結果： &quot;<?php echo esc_html( get_search_query() ); ?>&quot;</h1>
            <span class="page-header__text page-header__text--sub">Search Results</span>
        </header>

        <div class="page-content">
            <h2>見つかりませんでした</h2>
            <p>検索キーワードに一致するものが見つかりませんでした。 別のキーワードで試してみてください。</p>
            <?php get_search_form(); ?>
        </div>

    <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>
