<?php
/**
 *
 * Premium Sidebars. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, PlanetStyles, http://planetstyles.net/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace planetstyles\volaresidebars\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('planetstyles_volaresidebars_enable_collapse', 1)),
			// array('config.add', array('planetstyles_volaresidebars_enable_search_widget', 1)),
			array('config.add', array('planetstyles_volaresidebars_enable_profile_widget', 1)),
			array('config.add', array('planetstyles_volaresidebars_location', 1)),
			array('config.add', array('planetstyles_volaresidebars_enable_social', 1)),
			array('config.add', array('planetstyles_volaresidebars_enable_leftbar', 0)),
			array('config.add', array('planetstyles_volaresidebars_leftbar_width', 120)),
			array('config_text.add', array('planetstyles_volaresidebars_leftbar_content', '')),
			array('config.add', array('planetstyles_volaresidebars_enable_rightbar', 1)),
			array('config.add', array('planetstyles_volaresidebars_rightbar_width', 300)),
			array('config_text.add', array('planetstyles_volaresidebars_rightbar_content', '')),
			array('config.add', array('planetstyles_volaresidebars_social_behance', '')),
			array('config.add', array('planetstyles_volaresidebars_social_discord', '')),
			array('config.add', array('planetstyles_volaresidebars_social_dribble', '')),
			array('config.add', array('planetstyles_volaresidebars_social_etsy', '')),
			array('config.add', array('planetstyles_volaresidebars_social_facebook', '')),
			array('config.add', array('planetstyles_volaresidebars_social_github', '')),
			array('config.add', array('planetstyles_volaresidebars_social_googleplus', '')),
			array('config.add', array('planetstyles_volaresidebars_social_instagram', '')),
			array('config.add', array('planetstyles_volaresidebars_social_paypal', '')),
			array('config.add', array('planetstyles_volaresidebars_social_pinterest', '')),
			array('config.add', array('planetstyles_volaresidebars_social_reddit', '')),
			array('config.add', array('planetstyles_volaresidebars_social_slack', '')),
			array('config.add', array('planetstyles_volaresidebars_social_snapchat', '')),
			array('config.add', array('planetstyles_volaresidebars_social_soundcloud', '')),
			array('config.add', array('planetstyles_volaresidebars_social_steam', '')),
			array('config.add', array('planetstyles_volaresidebars_social_tumblr', '')),
			array('config.add', array('planetstyles_volaresidebars_social_twitch', '')),
			array('config.add', array('planetstyles_volaresidebars_social_twitter', '')),
			array('config.add', array('planetstyles_volaresidebars_social_vimeo', '')),
			array('config.add', array('planetstyles_volaresidebars_social_youtube', '')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_VOLARE_SIDEBARS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_VOLARE_SIDEBARS_TITLE',
				array(
					'module_basename'	=> '\planetstyles\volaresidebars\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
	
}
