<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Client extends Entity
{


    protected $_accessible = [
        'tipo' => true,
        'nome' => true,
        'uploadfile' => true,
        'local' => true,
        'url' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
}
