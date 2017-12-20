<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
		<div class="navbar-header">
			<div class="navbar-header-container">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'wedocs' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if ( $logo = get_theme_mod( 'wedocs_logo' ) ) { ?>
					<img src="<?php echo esc_url( $logo ); ?>">
				<?php } ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
			</div>
		</div>

		<nav class="collapse navbar-collapse" role="navigation">
			<?php
				if ( has_nav_menu('primary_navigation') ) :
					wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav') );
				endif;

				if ( has_nav_menu( 'secondary' ) ) {
					?>
					<div id="secondary-menu" class="secondary-menu">
						<?php
						wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 3 ) );
						?>
					</div>
					<?php
				}
			?>
		</nav>
	</div>
</header>

<div class="top-search-form" id="top-search-form">
	<div class="container">

	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
				<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

					<div class="input-group">
						<div class="header-title-container">
							<h1><?php _e( '[:en]Official User Manual for DRIVER[:tl]Opisyal na Pangtaong Manwal ng DRIVER[:]' ) ?></h1>
							<span>To access the main site, go to <a href="http://roadsafety.gov.ph">roadsafety.gov.ph</a></span>
						</div>
						<label class="hide"><?php _e('Search for:', 'wedocs'); ?></label>
						<input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control input-lg" placeholder="<?php _e('Search', 'wedocs'); ?> Help">
						<input type="hidden" name="search_param" value="<?php isset( $_GET['search_param'] ) ? sanitize_text_field( $_GET['search_param'] ) : 'all'; ?>" id="search_param">
					</div><!-- /input-group -->

				</form>
	        </div>
	    </div>
	</div>
</div>
