
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 17:01
 * To change this template use File | Settings | File Templates.
 *
 * @var $organization_id
 * @var $roleId
 * @var $organizationType
 * @var $stuff
 */
class WebUser extends CWebUser
{
    private $_model = NULL;

    function getRole()
    {
        if ($user = $this->getModel()) {
            // в таблице User есть поле role
            return $user->roles->name;
        }
    }

    public function isAdmin() {
        return $this->getRole()==Users::ROLE_ADMIN ? TRUE : FALSE;
    }

    function getRoleId()
    {
        if ($user = $this->getModel()) {
            // в таблице User есть поле roleId.
            return $user->roleId;
        }
    }



    function getOrganization_id()
    {
        if ($user = $this->getModel()) {
            return $user->organization_id;
        }
    }

    function getOrganization()
    {
        if ($user = $this->getModel()) {
            return $user->organization->name;
        }
    }


    public function getOrganizationType() {
        if($user = $this->getModel())
            return $user->organization->type;
    }

    public function getPhio() {
        if($user = $this->getModel())
            return $user->phio;
    }

    public function getStuff() {
        if($user = $this->getModel())
           return Users::model()->findAllByAttributes(array('organization_id'=>$this->getOrganization_id()));
    }

    private function getModel()
    {
        if (!$this->isGuest && $this->_model === NULL) {
            $this->_model = Users::model()->with('roles', 'organization')->findByPk($this->id);
        }
        return $this->_model;
    }
}
