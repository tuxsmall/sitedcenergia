<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Branch extends Entity
{


    protected $_accessible = [
        'estado' => true,
        'cidade' => true,
        'uploadfile' => true,
        'endeco' => true,
        'whatsapp' => true,
		'instagram' => true,
		'label' => true,
        'created' => true,
        'modified' => true
    ];
}
