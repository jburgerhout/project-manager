<?php
	
	$version_counter = 1;
	
	while(file_exists('v'.$version_counter.'/'))
	{
		$version_counter = $version_counter + 1;
		if($version_counter > 50)
			throw new ErrorException('<p style="color:red;">There was an error. Version could not be detected. Please use this format: v1 v2 v3 ect.</p>');
	}
	 
	header('Location: v'.($version_counter - 1).'/');
?>