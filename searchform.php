<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input title="サイト内検索" type="search" class="search-field" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input class="button button--primary" type="submit" value="検索">
</form>
