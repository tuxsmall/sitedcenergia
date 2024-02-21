<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;


class Kit extends Entity
{

    protected $_accessible = [
        'uploadfile' => true,
        'nome' => true,
        'category_id' => true,
        'slug' => true,
        'descricao_curta' => true,
        'descricao_longa' => true,
        'indicado' => true,
        'valor' => true,
        'formaPagamento' => true,
        'status' => true,
        'acessos' => true,
        'garantia' => true,
        'created' => true,
        'modified' => true,
        'category' => true
    ];

    protected function _setSlug($slug){
        $slug = Text::slug(strtolower($slug));
        if(empty($slug)){
            $slug = Text::slug(strtolower($this->_properties['nome']));
        }
        return $slug;
    }

}
