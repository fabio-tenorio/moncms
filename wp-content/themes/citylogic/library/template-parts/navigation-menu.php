<?php
global $uppercase, $is_navigation_menu_transparent;

$alignment = get_theme_mod( 'citylogic-navigation-menu-alignment', customizer_library_get_default( 'citylogic-navigation-menu-alignment' ) );

if ( function_exists( 'max_mega_menu_is_enabled' ) && max_mega_menu_is_enabled( 'primary' ) ) {
?>
<nav id="site-navigation" class="main-navigation-mega-menu" style="background: linear-gradient(to bottom, <?php echo( mmm_get_theme_for_location('primary')['container_background_from'] ); ?>, <?php echo( mmm_get_theme_for_location('primary')['container_background_to'] ); ?>);" role="navigation">
	<div id="main-menu" class="main-menu-container">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
<?php 
} else {
?>
<nav id="site-navigation" class="main-navigation <?php echo( $alignment == 'left-aligned' ? 'border-bottom' : '' ); ?> centered-submenu <?php echo esc_attr( get_theme_mod( 'citylogic-navigation-menu-rollover-style', customizer_library_get_default( 'citylogic-navigation-menu-rollover-style' ) ) ); ?> <?php echo esc_attr( $uppercase ); ?> <?php echo esc_attr( get_theme_mod( 'citylogic-navigation-menu-alignment', customizer_library_get_default( 'citylogic-navigation-menu-alignment' ) ) ); ?> <?php echo ( $is_navigation_menu_transparent && $alignment == 'left-aligned' ) ? 'transparent' : ''; ?>" role="navigation">
	<span class="header-menu-button"><i class="otb-fa otb-fa-bars"></i></span>
	<div id="main-menu" class="main-menu-container">
		<div class="main-menu-close"><i class="otb-fa otb-fa-angle-right"></i><i class="otb-fa otb-fa-angle-left"></i></div>
		<div class="main-navigation-inner">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
        
		<div class="search-slidedown">
			<div class="container">
				<div class="padder">
					<div class="search-block">
					<?php if( get_theme_mod( 'citylogic-navigation-menu-search-button', customizer_library_get_default( 'citylogic-navigation-menu-search-button' ) ) && get_theme_mod( 'citylogic-navigation-menu-search-type', customizer_library_get_default( 'citylogic-navigation-menu-search-type' ) ) == 'default' ) : ?>
						<?php get_search_form(); ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
        
	</div>
</nav><!-- #site-navigation -->
<?php 
}
