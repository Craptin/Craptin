<?php
/**
 *
 * Premium Sidebars. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, PlanetStyles, http://planetstyles.net/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace planetstyles\volaresidebars\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Premium Sidebars Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
		    'core.user_setup'		=> 'load_language_on_setup',
		    'core.page_header_after'	=> 'output_template_vars',
		);
	}
	
	/* @var \phpbb\config\config */
	protected $config;
	
	/* @var $config_text \phpbb\config\db_text */
	protected $config_text;
	
	/* @var \phpbb\template\template */
	protected $template;
	
	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config
	 * @param \phpbb\config\db_text		$config_text
	 * @param \phpbb\template\template	$template
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->template = $template;
	}
	
	
	/**
	 * Grab ACP config and output applicable vars to template
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function output_template_vars($event)
	{
	    // Simple things first, push all vars to the template
	    $this->template->assign_vars(array(
		'S_VS_ENABLE_COLLAPSE'		=> $this->config['planetstyles_volaresidebars_enable_collapse'],
		// 'S_VS_ENABLE_SEARCH_WIDGET'	=> $this->config['planetstyles_volaresidebars_enable_search_widget'],
		'S_VS_ENABLE_PROFILE_WIDGET'	=> $this->config['planetstyles_volaresidebars_enable_profile_widget'],
		'S_VS_LOCATION'			=> $this->config['planetstyles_volaresidebars_location'],
		'S_VS_ENABLE_SOCIAL'	        => $this->config['planetstyles_volaresidebars_enable_social'],
		'S_VS_ENABLE_LEFTBAR'		=> $this->config['planetstyles_volaresidebars_enable_leftbar'],
		'S_VS_LEFTBAR_WIDTH'		=> $this->config['planetstyles_volaresidebars_leftbar_width'],
		'S_VS_LEFTBAR_CONTENT'		=> $this->config_text->get('planetstyles_volaresidebars_leftbar_content'),
		'S_VS_ENABLE_RIGHTBAR'	        => $this->config['planetstyles_volaresidebars_enable_rightbar'],
		'S_VS_RIGHTBAR_WIDTH'		=> $this->config['planetstyles_volaresidebars_rightbar_width'],
		'S_VS_RIGHTBAR_CONTENT'		=> $this->config_text->get('planetstyles_volaresidebars_rightbar_content'),
		'S_VS_SOCIAL_BEHANCE'		=> $this->config['planetstyles_volaresidebars_social_behance'],
		'S_VS_SOCIAL_DISCORD'		=> $this->config['planetstyles_volaresidebars_social_discord'],
		'S_VS_SOCIAL_DRIBBLE'		=> $this->config['planetstyles_volaresidebars_social_dribble'],
		'S_VS_SOCIAL_ETSY'		=> $this->config['planetstyles_volaresidebars_social_etsy'],
		'S_VS_SOCIAL_FACEBOOK'		=> $this->config['planetstyles_volaresidebars_social_facebook'],
		'S_VS_SOCIAL_GITHUB'		=> $this->config['planetstyles_volaresidebars_social_github'],
		'S_VS_SOCIAL_GOOGLEPLUS'	=> $this->config['planetstyles_volaresidebars_social_googleplus'],
		'S_VS_SOCIAL_INSTAGRAM'		=> $this->config['planetstyles_volaresidebars_social_instagram'],
		'S_VS_SOCIAL_PAYPAL'		=> $this->config['planetstyles_volaresidebars_social_paypal'],
		'S_VS_SOCIAL_PINTEREST'		=> $this->config['planetstyles_volaresidebars_social_pinterest'],
		'S_VS_SOCIAL_REDDIT'		=> $this->config['planetstyles_volaresidebars_social_reddit'],
		'S_VS_SOCIAL_SLACK'		=> $this->config['planetstyles_volaresidebars_social_slack'],
		'S_VS_SOCIAL_SNAPCHAT'		=> $this->config['planetstyles_volaresidebars_social_snapchat'],
		'S_VS_SOCIAL_SOUNDCLOUD'	=> $this->config['planetstyles_volaresidebars_social_soundcloud'],
		'S_VS_SOCIAL_STEAM'		=> $this->config['planetstyles_volaresidebars_social_steam'],
		'S_VS_SOCIAL_TUMBLR'		=> $this->config['planetstyles_volaresidebars_social_tumblr'],
		'S_VS_SOCIAL_TWITCH'		=> $this->config['planetstyles_volaresidebars_social_twitch'],
		'S_VS_SOCIAL_TWITTER'		=> $this->config['planetstyles_volaresidebars_social_twitter'],
		'S_VS_SOCIAL_VIMEO'		=> $this->config['planetstyles_volaresidebars_social_vimeo'],
		'S_VS_SOCIAL_YOUTUBE'		=> $this->config['planetstyles_volaresidebars_social_youtube'],
	    ));
	    
	    
	    // Decide on sidebar classes added to <body> class attribute
	    $sidebarclass = ' ';
	    if (empty($this->config['planetstyles_volaresidebars_location']))
	    {
		$sidebarclass .= 'sidebarIndex ';
	    }
	    else 
	    {
		$sidebarclass .= 'sidebarsGlobal ';
	    }
	    if ($this->config['planetstyles_volaresidebars_enable_leftbar'] == 1)
	    {
		$sidebarclass .= 'sidebarsLeft ';
	    }
	    if ($this->config['planetstyles_volaresidebars_enable_rightbar'] == 1)
	    {
		$sidebarclass .= 'sidebarRight ';
	    }
	    $this->template->append_var('BODY_CLASS', $sidebarclass);
	    
	}
	
	/**
	 * Load common language files during user setup
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name'	 => 'planetstyles/volaresidebars',
			'lang_set'	 => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
