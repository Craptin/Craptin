<?php

namespace planetstyles\volare\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\cache\driver\driver_interface */
	protected $cache;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	 * Constructor
	 *
	 * @param \phpbb\cache\driver\driver_interface $cache       Cache driver interface
	 * @param \phpbb\config\config                 $config      Config object
	 * @param \phpbb\config\db_text                $config_text DB text object
	 * @param \phpbb\template\template             $template    Template object
	 * @access public
	 */
	public function __construct(\phpbb\cache\driver\driver_interface $cache, \phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\template\template $template)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->config_text = $config_text;
		$this->template = $template;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header' => 'load_volare_settings_data',
		);
	}

	/**
	 * Load volare settings data
	 *
	 * @return null
	 * @access public
	 */
	public function load_volare_settings_data()
	{
		$this->get_volare_configs();

		$html_code_data = $this->get_html_code();

		$this->template->assign_vars(array(
			'VOLARE_FORUM_LOGO'			=> $this->get_volare_forum_logo(),
			'VOLARE_FORUM_HEADER'			=> $this->get_volare_forum_header(),
			'VOLARE_FORUM_FAVICON'			=> $this->get_volare_forum_favicon(),

			'VOLARE_SETTINGS_HTML_1'	=> $html_code_data['volare_settings_html_1'],
			'VOLARE_SETTINGS_HTML_2'	=> $html_code_data['volare_settings_html_2'],
			'VOLARE_SETTINGS_HTML_3'	=> $html_code_data['volare_settings_html_3'],
			'VOLARE_SETTINGS_HTML_4'	=> $html_code_data['volare_settings_html_4'],
		));
	}

	/**
	 * Get the forum logo IMG tag
	 *
	 * @return string
	 */
	protected function get_volare_forum_logo()
	{
		$logo_src    = $this->config['volare_settings_logo_path'];
		$logo_width  = $this->config['volare_settings_logo_width'] ? ' width="' . $this->config['volare_settings_logo_width'] . '"' : '';
		$logo_height = $this->config['volare_settings_logo_height'] ? ' height="' . $this->config['volare_settings_logo_height'] . '"' : '';

		return $logo_src ? '<img src="' . generate_board_url() . '/' . $logo_src . '"' . $logo_width . $logo_height . ' alt="">' : '';
	}
	
	/**
	 * Get the forum header image
	 *
	 * @return string
	 */
	protected function get_volare_forum_header()
	{
		$header_src    = $this->config['volare_settings_header_path'];

		return $header_src ? generate_board_url() . '/' . $header_src  : '';
	}
	
	/**
	 * Get the forum favicon
	 *
	 * @return string
	 */
	protected function get_volare_forum_favicon()
	{
		$favicon_src    = $this->config['volare_settings_favicon_path'];

		return $favicon_src ? generate_board_url() . '/' . $favicon_src  : '';
	}	

	/**
	 * Get the HTML code blocks as an array
	 *
	 * @return array
	 */
	protected function get_html_code()
	{
		if (($html_code_data = $this->cache->get('_volare_settings_html_data')) === false)
		{
			$html_code_data = $this->config_text->get_array(array(
				'volare_settings_html_1',
				'volare_settings_html_2',
				'volare_settings_html_3',
				'volare_settings_html_4',
			));

			$this->cache->put('_volare_settings_html_data', $html_code_data);
		}

		return array_map('htmlspecialchars_decode', $html_code_data);
	}

	/**
	 * Get the volare settings and output them to the template
	 */
	protected function get_volare_configs()
	{
		foreach ($this->config as $key => $value)
		{
			if (strpos($key, 'volare_settings_config_') === 0)
			{
				$this->template->assign_var(strtoupper($key), $value);
			}
		}
	}
}
