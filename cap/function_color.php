<?php
function display_colors( $colors ) {
	?>
	<div style="overflow: hidden">
		<?php foreach ( $colors as $color ) : ?>
			<?php display_color( $color ) ?>
		<?php endforeach; ?>
	</div>
	<?php
}

function display_color( $color ) {
	?>
	<div style="width: 20px; float: left; height: 20px; background-color: <?php echo $color ?>"></div>
	<?php
}