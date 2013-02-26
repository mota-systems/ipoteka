<?php

class RequestsModule extends CWebModule
{
    protected $_rules = array();
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'requests.models.*',
			'requests.components.*',
		));
   /*     $urlManager = Yii::app()->urlManager;
        $this->_rules['requests/<action:\w+>']='requests/default/<action>';
        $this->_rules['requests/<action:\w+>/<id:\d+>']='requests/default/<action>';
        $urlManager->addRules($this->_rules);*/
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
