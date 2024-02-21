<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;


class Category extends Entity
{


    protected $_accessible = [
        'categoria' => true,
        'ordem' => true,
        'slug' => true,
        'aplicacao' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'kits' => true
    ];

    protected function _setSlug($slug){
        $slug = Text::slug(strtolower($slug));
        if(empty($slug)){
            $slug = Text::slug(strtolower($this->_properties['categoria']));
        }
        return $slug;
    }

}
