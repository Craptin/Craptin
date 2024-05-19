<?php

namespace planetstyles\volare\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\planetstyles\volare\acp\main_module',
			'title'		=> 'ACP_VOLARE_SETTINGS_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_VOLARE_SETTINGS_SETTINGS',
					'auth'	=> 'ext_planetstyles/volare && acl_a_board',
					'cat'	=> array('ACP_VOLARE_SETTINGS_TITLE')
				),
			),
		);
	}
}
