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
			'requests.modules.*',
			'requests.modules.documents.models.*',
		));
        if(Yii::app()->user->role==Users::ROLE_ADMIN)
            $this->defaultController = 'admin';
        elseif(in_array(Yii::app()->user->role, array(Users::ROLE_AGENT_ADMIN, Users::ROLE_AGENT_MANAGER)))
            $this->defaultController = 'agent';
        else
            $this->defaultController = 'bank';
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
