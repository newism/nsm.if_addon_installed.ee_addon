<?php
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
$plugin_info = array(
	'pi_name' => 'NSM addon check',
	'pi_version' => '1.0.0',
	'pi_author' => 'Leevi Graham',
	'pi_author_url' => 'http://leevigraham.com/',
	'pi_description' => 'Checks if a module / plugin is installed during template processing.',
	'pi_usage' => "Usage instructions provided in the README.md"
);

/**
 * undocumented class
 *
 * @package default
 * @author Leevi Graham
 **/
class Nsm_if_addon_installed
{
	var $return_data = "";
	
	public function nsm_if_addon_installed()
	{
		$this->EE =& get_instance();

		if(! $addon = $this->EE->TMPL->fetch_param('addon'))
		{
			$this->return_data = "";
			return;
		}

		$this->return_data = (in_array($addon, $this->EE->TMPL->modules) || in_array($addon, $this->EE->TMPL->plugins))
								? $this->EE->TMPL->tagdata
								: $this->EE->TMPL->no_results();
	}
} // END class 