<?php
/**
 * @package     Joomla.Site
 * @subpackage  Com_api
 *
 * @copyright   Copyright (C) 2009-2014 Techjoomla, Tekdi Technologies Pvt. Ltd. All rights reserved.
 * @license     GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 * @link        http://techjoomla.com
 * Work derived from the original RESTful API by Techjoomla (https://github.com/techjoomla/Joomla-REST-API)
 * and the com_api extension by Brian Edgerton (http://www.edgewebworks.com)
 */

defined('_JEXEC') or die('Restricted access');

/**
 * API class GroupSimpleSchema
 *
 * @since  1.0
 */
class GroupSimpleSchema
{
	public $id;

	public $title;

	public $description;

	public $category_id;

	public $category_name;

	// Public $cover;

	public $type;

	public $avatar_large;

	public $member_count;

	public $hits;

	public $created_by;

	public $created_date;

	public $album_count;

	public $isowner;

	public $ismember;

	public $approval_pending;

	public $cover;

	public $more_info;

	public $params;
}
