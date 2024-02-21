<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


class User extends Entity
{

    protected $_accessible = [
        'nome' => true,
        'username' => true,
        'password' => true,
        'level' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
    protected $_hidden = [
        'password'
    ];
	
	protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
