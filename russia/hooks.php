<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

/* Defines the hook to be used to modify the webpage. */
$hook['display_override'] = array(
                                'class'    => 'MyHook',
                                'function' => 'massage_data',
                                'filename' => 'MyHook.php',
                                'filepath' => 'hooks',
                                'params'   => array('controller')
                                );

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */