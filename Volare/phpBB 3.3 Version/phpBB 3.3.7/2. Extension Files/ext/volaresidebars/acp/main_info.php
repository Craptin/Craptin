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
 * Premium Sidebars ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\planetstyles\volaresidebars\acp\main_module',
			'title'		=> 'ACP_VOLARE_SIDEBARS_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'VOLARE_SIDEBARS_SETTINGS',
					'auth'	=> 'ext_planetstyles/volaresidebars && acl_a_board',
					'cat'	=> array('ACP_VOLARE_SIDEBARS_TITLE')
				),
			),
		);
	}
}
