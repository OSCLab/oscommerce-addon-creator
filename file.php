<?php
/**
*
* @package MODX creator
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

$filename = (isset($_GET['file'])) ? $_GET['file'] : '';

if($filename == 'osc.addon.en.xsl' ||  $filename == 'license.txt')
{
	if(strpos('..', $filename) !== false)
	{
		exit;
	}

	$file = ($filename == 'osc.addon.en.xsl') ? './osc.addon.en.xsl' : './license.txt';
	if(!file_exists($file))
	{
		exit;
	}

	// Send file headers
	header('Content-type: file');
	header('Content-Disposition: attachment;filename=' . (($filename == 'osc.addon.en.xsl') ? 'osc.addon.en.xsl' : 'license.txt'));
	header('Pragma: no-cache');
	header('Expires: 0');

	readfile($file);
}
?>
