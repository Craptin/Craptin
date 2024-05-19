<?php
/**
 *
 * Premium Sidebars. An extension for the phpBB Forum Software package.
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
    
	'VS_SOCIAL_BEHANCE'		=> 'Behance',
	'VS_SOCIAL_DISCORD'		=> 'Discord',
	'VS_SOCIAL_DRIBBLE'		=> 'Dribble',
	'VS_SOCIAL_ETSY'		=> 'Etsy',
	'VS_SOCIAL_FACEBOOK'		=> 'Facebook',
	'VS_SOCIAL_GITHUB'		=> 'GitHub',
	'VS_SOCIAL_GOOGLEPLUS'		=> 'Google+',
	'VS_SOCIAL_INSTAGRAM'		=> 'Instagram',
	'VS_SOCIAL_PAYPAL'		=> 'PayPal',
	'VS_SOCIAL_PINTEREST'		=> 'Pinterest',
	'VS_SOCIAL_REDDIT'		=> 'Reddit',
	'VS_SOCIAL_SLACK'		=> 'Slack',
	'VS_SOCIAL_SNAPCHAT'		=> 'SnapChat',
	'VS_SOCIAL_SOUNDCLOUD'		=> 'SoundCloud',
	'VS_SOCIAL_STEAM'		=> 'Steam',
	'VS_SOCIAL_TUMBLR'		=> 'Tumblr',
	'VS_SOCIAL_TWITCH'		=> 'Twitch',
	'VS_SOCIAL_TWITTER'		=> 'Twitter',
	'VS_SOCIAL_VIMEO'		=> 'Vimeo',
	'VS_SOCIAL_YOUTUBE'		=> 'Youtube',
));
