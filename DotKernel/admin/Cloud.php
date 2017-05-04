<?php 

/**
* DotBoost Technologies Inc.
* DotKernel Application Framework
*
* @category   DotKernel
* @copyright  Copyright (c) 2009-2015 DotBoost Technologies Inc. (http://www.dotboost.com)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
* @version    $Id$
*/
/** Auto-generated model
 *
 * Remove this comment after creating the model
 *
 * Insert Model Name    (UcFirst) - eg. Article : Sound
 * Insert Model Table (camelCase) - eg. article : sound
 */
 
/**
* Sound Model
* Here are all the actions related to the system settings
* @category   DotKernel
* @package    Admin 
* @author     DotKernel Team <team@dotkernel.com>
*/
class Sound extends Dot_Model
{
	
	/**
	 * Automatically generated Add method for CRUD Model
	 * @access public
	 * @param array $data
	 * @return bool $success
	 */
	public function insertSound($sound)
	{
		try 
		{
			$this->db->insert('sound', $sound);
			return true;
		}
		catch (Exception $e)
		{
			return false;
		}
	}
	
	/**
	 * Automatically generated Delete method for CRUD Model
	 * @access public
	 * @param int $id
	 * @return bool $success
	 */
	public function deleteSound($id)
	{
		try
		{
			$this->db->delete('sound', 'id='.$id);
			return true;
		}
		catch (Exception $e)
		{
			return false;
		}
	}
	
	/**
	 * Automatically generated Delete method for CRUD Model
	 * @access public
	 * @param int $id
	 * @param array sound
	 * @return bool $success
	 */
	public function updateSound($id, $sound)
	{
		try
		{
			$this->db->update('sound', $sound, 'id='.$id);
			return true;
		}
		catch (Exception $e)
		{
			return false;
		}
	}
	
	/**
	 * Automatically generated GET LIST method for CRUD Model
	 * @access public
	 * @param int $page [optional]
	 * @return bool $success
	 */
	public function getSoundList($page = 1)
	{
		$select = $this->db->select()->from('sound');
		$dotPaginator = new Dot_Paginator($select, $page, $this->settings->resultsPerPage);
		return $dotPaginator->getData();
	}
	
	/**
	 * Automatically generated GET element BY ID method for CRUD Model
	 * @access public
	 * @param int $id
	 * @return array sound
	 */
	public function getSoundById($id)
	{
		$select = $this->db->select()->from('sound')->where('id = ?', $id);
		$sound = $this->db->fetchRow($select);
		return $sound;
	}
	
	/**
	 * Automatically generated GET element BY Criteria method for CRUD Model
	 * @access public
	 * @param string $field
	 * @param string $value
	 * @return array sound
	 */
	public function getSoundBy($field, $value)
	{
		$select = $this->db->select()->from('sound')->where($field.'= ?', $value);
		$sound = $this->db->fetchRow($select);
		return $sound;
	}
	
	
}