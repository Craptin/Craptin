<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'VOLARE_SETTINGS_LOGO'				=> 'Logos &amp; Header Background',
	'VOLARE_SETTINGS_LOGO_EXPLAIN'		=> '',
	'VOLARE_SETTINGS_LOGO_UPLOAD'		=> 'Logo image upload',
	'VOLARE_SETTINGS_LOGO_UPLOAD_EXPLAIN'=> 'Upload a logo image. The logo location below will automatically be filled in when an image is uploaded. Accepted formats: gif, jpg, png, svg.',
	'VOLARE_SETTINGS_LOGO_PATH'			=> 'Logo image location',
	'VOLARE_SETTINGS_LOGO_PATH_EXPLAIN'	=> 'This will be filled in automatically. Delete and submit to remove logo.',
	'VOLARE_SETTINGS_LOGO_WIDTH'			=> 'Logo width',
	'VOLARE_SETTINGS_LOGO_WIDTH_EXPLAIN'	=> 'Leave blank to use default logo size',	
	'VOLARE_SETTINGS_LOGO_HEIGHT'		=> 'Logo height',
	'VOLARE_SETTINGS_LOGO_HEIGHT_EXPLAIN'	=> 'Leave blank to use default logo size',	
	'VOLARE_SETTINGS_LOGO_ERROR'			=> 'The logo file %s failed to upload.',
	
	'VOLARE_SETTINGS_HEADER_ERROR'			=> 'The header file %s failed to upload. Check ACP &rarr; Attachment Settings to max filesize and format will allow for this background image.',
	'VOLARE_SETTINGS_HEADER_UPLOAD'		=> 'Guest message background image',
	'VOLARE_SETTINGS_HEADER_UPLOAD_EXPLAIN'	=> 'Upload a background image (leave blank to use theme accent colour as background). The background location below will automatically be filled in when an image is uploaded.',
	'VOLARE_SETTINGS_HEADER_PATH'			=> 'Background image location',
	'VOLARE_SETTINGS_HEADER_PATH_EXPLAIN'	=> 'This will be filled in automatically. Delete and submit to remove background image.',
	
	'VOLARE_SETTINGS_FAVICON_ERROR'			=> 'The favicon file %s failed to upload. Check that the file size and format are allowed in your attachment settings.',
	'VOLARE_SETTINGS_FAVICON_UPLOAD'		=> 'Favicon upload',
	'VOLARE_SETTINGS_FAVICON_EXPLAIN'	=> 'Upload a favicon. Square images strongly recommended.',
	'VOLARE_SETTINGS_FAVICON_PATH'			=> 'Favicon image location',
	'VOLARE_SETTINGS_FAVICON_PATH_EXPLAIN'	=> 'This will be filled in automatically. Delete and submit to remove favicon.',	

	'VOLARE_SETTINGS_HTML_CODE'			=> 'HTML code blocks',
	'VOLARE_SETTINGS_HTML'				=> 'Custom HTML code block #%d',
	'VOLARE_SETTINGS_HTML_EXPLAIN'		=> 'Uses the template var <samp>{VOLARE_SETTINGS_HTML_%d}</samp>',

	'VOLARE_SETTINGS_CONFIG'				=> 'Style Settings',
	'VOLARE_SETTINGS_CONFIG_EXPLAIN'		=> 'Uses the template var <samp>{%s}</samp>',

	'VOLARE_SETTINGS_SAVED'				=> 'Style settings have been saved.',
));
