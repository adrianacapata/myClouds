<?php

class Cloud_View extends View
{
	//construct
	public function __construct($tpl)
	{
		$this->registry = Zend_Registry::getInstance();
		$this->tpl = $tpl;
	}
	
	
	private function _setData($data, $prefix='')
	{
		if(!is_array($data))
		{
			// ver 1
			error_log("NOT AN ARRAY ". __FILE__ .':'.__LINE__);
			return false;
			// ver 2 - won't happen because of the return
			// throw new Exception("Not an array passed");
		}
		foreach ($data as $key => $value)
		{
			$this->tpl->setVar(strtoupper($prefix.$key) , $value);
		}
		return true;
	}
	
	
}
