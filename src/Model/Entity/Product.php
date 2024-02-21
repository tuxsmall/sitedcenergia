<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Product extends Entity
{


    protected $_accessible = [
        'nome' => true,
        'descricao' => true,
        'imagem' => true,
        'valor' => true,
        'slide' => true,
        'destaque' => true,
        'category_id' => true,
        'status' => true,
        'tipo' => true,
        'expira' => true,
        'created' => true,
        'modified' => true,
        'category' => true
    ];
}
