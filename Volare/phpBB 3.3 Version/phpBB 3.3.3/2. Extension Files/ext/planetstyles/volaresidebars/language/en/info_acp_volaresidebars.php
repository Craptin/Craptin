<?php
/**
 *
 * Volare Sidebars. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, PlanetStyles, http://planetstyles.net/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_VOLARE_SIDEBARS_SETTING_SAVED'		=> 'Volare Sidebars settings saved',
	'ACP_VOLARE_SIDEBARS_TITLE'			=> 'Volare Sidebars',    
	'VOLARE_SIDEBARS_SETTINGS'			=> 'Settings',
    
    	'VS_BAR_CONTENT'				=> 'Content',
	'VS_BAR_CONTENT_EXPLAIN'			=> 'Use HTML and JS at your own risk.',
	'VS_BAR_WIDTH'					=> 'Width (pixels)',
	'VS_BAR_WIDTH_EXPLAIN'			=> '<strong>Important:</strong> If using fixed-width content (such as an image / advertisement), add <strong style="text-decoration: underline;">40px</strong> to allow for left/right padding.<br />Eg: If your ad is 300px wide, enter 340px here.',
    
	'VS_ENABLE_COLLAPSE'				=> 'Collapse feature',
	'VS_ENABLE_COLLAPSE_EXPLAIN'			=> 'Enable to let sidebars collapse',
	'VS_ENABLE_LEFTBAR'				=> 'Enable left sidebar',
	'VS_ENABLE_PROFILE_WIDGET'			=> 'Enable Login/Profile widget',
	'VS_ENABLE_PROFILE_WIDGET_EXPLAIN'		=> 'Shows a profile of the current user or a login widget for guests.',
	'VS_ENABLE_RIGHTBAR'				=> 'Enable right sidebar',
	//'VS_ENABLE_SEARCH_WIDGET'			=> 'Enable search widget',
	//'VS_ENABLE_SEARCH_WIDGET_EXPLAIN'		=> 'Shows a search feature in the sidebar',
	'VS_ENABLE_SOCIAL'				=> 'Enable social icons',
	'VS_ENABLE_SOCIAL_EXPLAIN'			=> 'Lists all social links provided below',
	
	'VS_GLOBAL'					=> 'Global',
	'VS_INDEX_ONLY'					=> 'Index only',
    	'VS_LEFTBAR'					=> 'Left Sidebar',
	'VS_LOCATION'					=> 'Sidebar location',
	'VS_LOCATION_EXPLAIN'				=> 'You can choose to show the sidebars on every page (global) or only on the forum index.',
	'VS_RIGHTBAR'					=> 'Right Sidebar',
	
	'VS_SOCIAL_LINKS'				=> 'Social Links',
	'VS_SOCIAL_LINKS_EXPLAIN'			=> 'You can place links to social media accounts here. All provided social links will be automatically placed in the sidebar.',
    	
));
