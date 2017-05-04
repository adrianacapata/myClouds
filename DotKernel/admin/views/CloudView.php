<?php

class Cloud_View extends View
{
	//construct
	public function __construct($tpl)
	{
		$this->registry = Zend_Registry::getInstance();
		$this->tpl = $tpl;
	}
}

class 