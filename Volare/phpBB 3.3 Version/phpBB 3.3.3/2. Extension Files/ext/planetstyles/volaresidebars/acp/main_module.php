<?php
/**
 *
 * Premium Sidebars. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, PlanetStyles, http://planetstyles.net/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace planetstyles\volaresidebars\acp;

/**
 * Premium Sidebars ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpbb_container;

		$user->add_lang_ext('planetstyles/volaresidebars', 'common');
		$this->tpl_name = 'acp_volaresidebars_body';
		$this->page_title = $user->lang('ACP_VOLARE_SIDEBARS_TITLE');
		add_form_key('planetstyles/volaresidebars');
		$config_text = $phpbb_container->get('config_text');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('planetstyles/volaresidebars'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('planetstyles_volaresidebars_enable_collapse',	    $request->variable('vs_enable_collapse', 1));
			// $config->set('planetstyles_volaresidebars_enable_search_widget',   $request->variable('vs_enable_search_widget', 1));
			$config->set('planetstyles_volaresidebars_enable_profile_widget',  $request->variable('vs_enable_profile_widget', 1));
			$config->set('planetstyles_volaresidebars_location',		    $request->variable('vs_location', 1));
			$config->set('planetstyles_volaresidebars_enable_social',	    $request->variable('vs_enable_social', 1));
			$config->set('planetstyles_volaresidebars_enable_leftbar',	    $request->variable('vs_enable_leftbar', 0));
			$config->set('planetstyles_volaresidebars_leftbar_width',	    $request->variable('vs_leftbar_width', 120));
			$config_text->set('planetstyles_volaresidebars_leftbar_content',   htmlspecialchars_decode($request->variable('vs_leftbar_content', '', true), ENT_COMPAT));
			$config->set('planetstyles_volaresidebars_enable_rightbar',	    $request->variable('vs_enable_rightbar', 1));
			$config->set('planetstyles_volaresidebars_rightbar_width',	    $request->variable('vs_rightbar_width', 300));
			$config_text->set('planetstyles_volaresidebars_rightbar_content',  htmlspecialchars_decode($request->variable('vs_rightbar_content', '', true), ENT_COMPAT));
			$config->set('planetstyles_volaresidebars_social_behance',	    $request->variable('vs_social_behance', '', true));
			$config->set('planetstyles_volaresidebars_social_discord',	    $request->variable('vs_social_discord', '', true));
			$config->set('planetstyles_volaresidebars_social_dribble',	    $request->variable('vs_social_dribble', '', true));
			$config->set('planetstyles_volaresidebars_social_etsy',	    $request->variable('vs_social_etsy', '', true));
			$config->set('planetstyles_volaresidebars_social_facebook',	    $request->variable('vs_social_facebook', '', true));
			$config->set('planetstyles_volaresidebars_social_github',	    $request->variable('vs_social_github', '', true));
			$config->set('planetstyles_volaresidebars_social_googleplus',	    $request->variable('vs_social_googleplus', '', true));
			$config->set('planetstyles_volaresidebars_social_instagram',	    $request->variable('vs_social_instagram', '', true));
			$config->set('planetstyles_volaresidebars_social_paypal',	    $request->variable('vs_social_paypal', '', true));
			$config->set('planetstyles_volaresidebars_social_pinterest',	    $request->variable('vs_social_pinterest', '', true));
			$config->set('planetstyles_volaresidebars_social_reddit',	    $request->variable('vs_social_reddit', '', true));
			$config->set('planetstyles_volaresidebars_social_slack',	    $request->variable('vs_social_slack', '', true));;
			$config->set('planetstyles_volaresidebars_social_snapchat',	    $request->variable('vs_social_snapchat', '', true));
			$config->set('planetstyles_volaresidebars_social_soundcloud',	    $request->variable('vs_social_soundcloud', '', true));
			$config->set('planetstyles_volaresidebars_social_steam',	    $request->variable('vs_social_steam', '', true));
			$config->set('planetstyles_volaresidebars_social_tumblr',	    $request->variable('vs_social_tumblr', '', true));
			$config->set('planetstyles_volaresidebars_social_twitch',	    $request->variable('vs_social_twitch', '', true));
			$config->set('planetstyles_volaresidebars_social_twitter',	    $request->variable('vs_social_twitter', '', true));
			$config->set('planetstyles_volaresidebars_social_vimeo',	    $request->variable('vs_social_vimeo', '', true));
			$config->set('planetstyles_volaresidebars_social_youtube',	    $request->variable('vs_social_youtube', '', true));
			    
			trigger_error($user->lang('ACP_VOLARE_SIDEBARS_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'			=> $this->u_action,
			'S_VS_ENABLE_COLLAPSE'		=> $config['planetstyles_volaresidebars_enable_collapse'],
			// 'S_VS_ENABLE_SEARCH_WIDGET'	=> $config['planetstyles_volaresidebars_enable_search_widget'],
			'S_VS_ENABLE_PROFILE_WIDGET'	=> $config['planetstyles_volaresidebars_enable_profile_widget'],
			'S_VS_LOCATION'			=> $config['planetstyles_volaresidebars_location'],
			'S_VS_ENABLE_SOCIAL'	        => $config['planetstyles_volaresidebars_enable_social'],
			'S_VS_ENABLE_LEFTBAR'		=> $config['planetstyles_volaresidebars_enable_leftbar'],
			'S_VS_LEFTBAR_WIDTH'		=> $config['planetstyles_volaresidebars_leftbar_width'],
			'S_VS_LEFTBAR_CONTENT'		=> $config_text->get('planetstyles_volaresidebars_leftbar_content'),
			'S_VS_ENABLE_RIGHTBAR'	        => $config['planetstyles_volaresidebars_enable_rightbar'],
			'S_VS_RIGHTBAR_WIDTH'		=> $config['planetstyles_volaresidebars_rightbar_width'],
			'S_VS_RIGHTBAR_CONTENT'		=> $config_text->get('planetstyles_volaresidebars_rightbar_content'),
			'S_VS_SOCIAL_BEHANCE'		=> $config['planetstyles_volaresidebars_social_behance'],
			'S_VS_SOCIAL_DISCORD'		=> $config['planetstyles_volaresidebars_social_discord'],
			'S_VS_SOCIAL_DRIBBLE'		=> $config['planetstyles_volaresidebars_social_dribble'],
			'S_VS_SOCIAL_ETSY'		=> $config['planetstyles_volaresidebars_social_etsy'],
			'S_VS_SOCIAL_FACEBOOK'		=> $config['planetstyles_volaresidebars_social_facebook'],
			'S_VS_SOCIAL_GITHUB'		=> $config['planetstyles_volaresidebars_social_github'],
			'S_VS_SOCIAL_GOOGLEPLUS'	=> $config['planetstyles_volaresidebars_social_googleplus'],
			'S_VS_SOCIAL_INSTAGRAM'		=> $config['planetstyles_volaresidebars_social_instagram'],
			'S_VS_SOCIAL_PAYPAL'		=> $config['planetstyles_volaresidebars_social_paypal'],
			'S_VS_SOCIAL_PINTEREST'		=> $config['planetstyles_volaresidebars_social_pinterest'],
			'S_VS_SOCIAL_REDDIT'		=> $config['planetstyles_volaresidebars_social_reddit'],
			'S_VS_SOCIAL_SLACK'		=> $config['planetstyles_volaresidebars_social_slack'],
			'S_VS_SOCIAL_SNAPCHAT'		=> $config['planetstyles_volaresidebars_social_snapchat'],
			'S_VS_SOCIAL_SOUNDCLOUD'	=> $config['planetstyles_volaresidebars_social_soundcloud'],
			'S_VS_SOCIAL_STEAM'		=> $config['planetstyles_volaresidebars_social_steam'],
			'S_VS_SOCIAL_TUMBLR'		=> $config['planetstyles_volaresidebars_social_tumblr'],
			'S_VS_SOCIAL_TWITCH'		=> $config['planetstyles_volaresidebars_social_twitch'],
			'S_VS_SOCIAL_TWITTER'		=> $config['planetstyles_volaresidebars_social_twitter'],
			'S_VS_SOCIAL_VIMEO'		=> $config['planetstyles_volaresidebars_social_vimeo'],
			'S_VS_SOCIAL_YOUTUBE'		=> $config['planetstyles_volaresidebars_social_youtube'],
		));
	}
}
