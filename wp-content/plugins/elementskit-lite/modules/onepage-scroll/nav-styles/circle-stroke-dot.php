<?php
/**
 * Circle - Stroke Dot
 */

$classlist['link'] .= 'met_d--block met_pos--relative met_w--20 met_h--20 editor:met_color met_bd--2 met_bdc--none editor:active:met_bdc met_radius--circle met_transition--300ms';

$classlist['span'] = 'met_d--block met_h--16 editor:met_bgc met_radius--circle met_opacity--70 hover:met_opacity--100 active:_:met_opacity--1 active:_:met_scale--40 met_transition--300ms';

$classlist['tooltip'] .= 'nav_tooltip met_d--none met_pos--absolute met_px--8 met_py--5 met_color--white editor:met_bgc met_radius--4 met_fs--14 met_lh--16 met_text--nowrap met_transition--300ms met_opacity--0 a:hover:met_opacity--100 active:_:met_opacity--100 ';

$classlist['arrow'] .= 'met_d--none met_pos--absolute editor:met_color met_bd--6 met_bdc--none met_transition--300ms met_opacity--0 a:hover:met_opacity--100 active:_:met_opacity--100 ';

if ( $nav_pos === 'top' || $nav_pos === 'bottom' ) :
	$classlist['tooltip'] .= 'met_left--50p met_translateLeft--m50p met_my--12 ';
	$classlist['arrow']   .= 'met_left--50p met_translateLeft--m50p ';
else :
	$classlist['tooltip'] .= 'met_top--50p met_translateTop--m50p met_mx--12 ';
	$classlist['arrow']   .= 'met_top--50p met_translateTop--m50p ';
endif;

?>
<div class="onepage_scroll_nav <?php echo esc_attr( $classlist['wrapper'] ); ?>">
	<ul class="<?php echo esc_attr( $classlist['ul'] ); ?>">
		<li data-menuanchor="section_1" class="<?php echo esc_attr( $classlist['li'] ); ?>">
			<a href="#section_1" class="<?php echo esc_attr( $classlist['link'] ); ?>">
				<span class="<?php echo esc_attr( $classlist['span'] ); ?>"></span>

				<span class="<?php echo esc_attr( $classlist['tooltip'] ); ?>"></span>
				<span class="<?php echo esc_attr( $classlist['arrow'] ); ?>"></span>
			</a>
		</li>
	</ul>
</div>
