<?php 

	if ($_POST):

		$bg = $_POST['bg'];

		if ($bg == 'bg1'): 
			echo 'url(imgs/mickey.jpg)';
		endif;
		if ($bg == 'bg2'): 
			echo 'url(imgs/mini.png)';
		endif;
		if ($bg == 'bg3'): 
			echo 'url(imgs/pluto.png)';
		endif;

	endif; 
		
	