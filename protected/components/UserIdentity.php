<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id, $_role;
//    public static $salt = 'SuFhl1nmZolZ9ULgkghy';
    public static $salt = '$6$rounds=100000$E!jLJ?.Zx[><+Q<[bQ№QNyw1M$';

    public function authenticate()
    {
        $record = Users::model()->with('roles')->findByAttributes(array('username' => $this->username));
        if ($record === NULL)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($record->password !== crypt($this->password, self::$salt))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_role = $record->roles->name;
            $this->_id = $record->id;
            $this->setState('role', $record->roles->name);
            $this->setState('phio', $record->phio);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function getSalt()
    {
        return $this->_salt;
    }
}
