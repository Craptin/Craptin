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
	'ACP_VOLARE_SETTINGS_TITLE'		=> 'Volare Theme: Control Panel',
	'ACP_VOLARE_SETTINGS_SETTINGS'	=> 'Volare Theme Settings',
));