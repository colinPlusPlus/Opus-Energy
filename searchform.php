<?php if ( is_page( 'help-and-advice' ) ): ?>
	<form role="search" method="get" id="searchform"
    class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <label class="sr-only sr-only-focusable" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" placeholder="What are you looking for?" value="<?php echo get_search_query(); ?>" class="search-field" name="s" id="s" />
        <div class="input-group-btn">
          <button class="search-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
	</form>
<?php else: ?>
	<form role="search" method="get" id="searchform"
    class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <label class="sr-only sr-only-focusable" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" placeholder="What are you looking for?" value="<?php echo get_search_query(); ?>" class="search-field" name="s" id="s" />
        <div class="input-group-btn">
          <button class="search-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
	</form>
<?php endif; ?>
