<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Slide extends Entity
{


    protected $_accessible = [
        'active' => true,
        'chamada1' => true,
        'titulo' => true,
        'link' => true,
        'slug' => true,
        'uploadfile' => true,
        'texto' => true,
        'status' => true,
        'ordem' => true,
        'created' => true,
        'modified' => true
    ];


}
