<?php
/*******************************
*    PHPBUF
*
* a buffer extension for php files
* 
* created by sirjofri
* (sirjofri@gmx.de)
*
*******************************/

namespace phpbuf;

include "config.php";

/*
* void incBuf( $file, $buffered )
*
* Parameters:
* $file     - (string) the filename
* $buffered - (bool) buffer yes (true) or no (false)
*
*/
function incBuf($file, $buffered)
{
	include "config.php";
	if(!file_exists($buf.$file))
	{
		touch($buf.$file);
	}
	if($buffered)
	{
		if(file_exists($buf.$file) && filemtime($buf.$file) < filemtime($files.$file))
		{
			ob_start();
			include $files.$file;
			$bufcontent = ob_get_clean();
			$buffile = fopen($buf.$file, "w");
			fwrite($buffile, $bufcontent);
			fclose($buffile);
			touch($buf.$file);
		} else {
			include $buf.$file;
		}
	} else {
		include $files.$file;
	}
}

?>
