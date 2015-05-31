<?php 

class Parser {


public static function ParseUrl($url, $element){



	$html = file_get_html($url);

	if ( !empty($html->find($element)) ) {


		foreach ($html->find($element) as $find) {

			if ( is_array($find->children) ) {

				foreach ($find->children as $child) {
					
					echo $child.'<br>';

					if( !empty($child->href) ) {

						echo 'href :'. $find->href.'<br>';
					}

					if( !empty($child->src) ) {

						echo 'img src :'. $child->src.'<br>';
						echo  "<img src='$url/$child->src'>";
					}
				}
			}

			else {

				echo $find.'<br>';
			}

			if( !empty($find->href) ) {

				echo 'href :'. $find->href.'<br>';
			}

			if( !empty($find->src) ) {

				echo 'img src :'. $find->src.'<br>';
				echo  "<img src='$url/$find->src'>";
			}
			
			
		}
	}

	else {

		echo 'Nothing found';
	}

	
}
}