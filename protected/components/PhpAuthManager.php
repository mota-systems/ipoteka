<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 02.02.13
 * Time: 22:09
 * To change this template use File | Settings | File Templates.
 */
class PhpAuthManager extends CPhpAuthManager{
    public function init(){
        // Иерархию ролей расположим в файле auth.php в директории config приложения
        if($this->authFile===null){
            $this->authFile=Yii::getPathOfAlias('application.config.auth').'.php';
        }

        parent::init();

        // Для гостей у нас и так роль по умолчанию guest.
        if(!Yii::app()->user->isGuest){
            // Связываем роль, заданную в БД с идентификатором пользователя,
            // возвращаемым UserIdentity.getId().
            $this->assign(Yii::app()->user->role, Yii::app()->user->id);
        }
    }
}