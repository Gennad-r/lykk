<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
    <input type="text" value="<?php echo get_search_query() ?>" placeholder="Поиск" name="s" id="s">
    <div id="searchsubmit" class="icon-find"></div>
</form>