<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Biography extends Entity
{

    protected $_accessible = [
        'chamada1' => true,
        'slug' => true,
        'chamada2' => true,
        'bullet1' => true,
        'bullet2' => true,
        'bullet3' => true,
        'uploadfile' => true,
        'texto' => true,
        'missao' => true,
        'visao' => true,
        'valores' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
}
