<?php

include_once( 'colorsofimage.class.php' );
include_once( 'function_color.php' );

function get_color($pic)
{
$ligne =$pic;//preg_split("/[\n]+/",$pic);
$img= isset( $ligne ) ? $ligne : null;
// foreach($img as $row => $imagee)
// {
	
		$image =preg_replace('/\s/', '', $img);
		if ( $image ) :
			$colors_of_image = new ColorsOfImage( $image );
			$colors = $colors_of_image->getProminentColors();
			return $colors;//color image
			// display_colors( $colors );//color image
			// display_color( $colors_of_image->getBackgroundColor() );//bachground color

		endif; 
// }		
}
function get_hash_color($tab_color)
{
$str='';
for($i=1;$i<9;$i++)
		{
			foreach($tab_color[$i] as $row)
			{
				$str=$str.$row;
			}
			$tab_hash[$i]=$str;
			$str='';
		}
return $tab_hash;
}
function get_hash1_color($tab_color)
{
$str='';

			foreach($tab_color as $row)
			{
				$str=$str.$row;
			}
			
			
		
return $str;
}

?>
	