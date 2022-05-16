

<form class="form-search"role="search" method="get" action="<?php home_url('/') ?>">

	<input type="search" name="s" placeholder="pesquisar" value="<?php get_search_query(); ?>">
	<input type="submit" value="Buscar">
</form>