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

//Set up a hook that interupts the flow just before displaying the page and redirects
//it to boldhook.php
$hook['display_override'] = array(
                                'class'    => 'BoldHook',
                                'function' => 'bold_words',
                                'filename' => 'boldhook.php',
                                'filepath' => 'hooks',
                                'params' => array()
                                );



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */