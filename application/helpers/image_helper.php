<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/array_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('getImageUrl'))
{
	/**
	 * Element
	 *
	 * Lets you determine whether an array index is set and whether it has a value.
	 * If the element is empty it returns NULL (or whatever you specify as the default value.)
	 *
	 * @param	string
	 * @param	array
	 * @param	mixed
	 * @return	complete image url
	 */
	function getImageUrl($argArrData)
	{
            $varFileName = "";
            $varImagePath = "";
            $varImageUrl = "";
            switch ($argArrData['type']){
                case "user_avatar_admin":
                        $varImagePath = FCPATH.'uploads/admin/users/thumb/'.SITE_ADMIN_AVATAR_PREFIX.$argArrData['imageName'];
                        $varImageUrl = base_url("uploads/admin/users/thumb")."/".SITE_ADMIN_AVATAR_PREFIX.$argArrData['imageName'];
                    break;
            }
            if($argArrData['imageName']!="" && file_exists($varImagePath)){
                return $varImageUrl;
            }
	}
}