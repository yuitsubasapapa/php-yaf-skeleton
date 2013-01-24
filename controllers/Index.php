<?php

class IndexController extends Yaf_Controller_Abstract
{

	public function indexAction()
	{
		Yaf_Dispatcher::getInstance()->disableView();
		
		$rand = mt_rand(1,100)/100 <= 0.1 ;
		echo (int)$rand ;

		// $this->getView()->assign("test", "Test......");

	}
}