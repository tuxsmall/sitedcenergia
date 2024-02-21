<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;



class Content extends Entity
{


    protected $_accessible = [
        'titulo' => true,
        'slug' => true,
        'texto' => true,
        'acessos' => true,
        'uploadfile' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];

    protected function _setSlug($slug){
        $slug = Text::slug(strtolower($slug));
        if(empty($slug)){
            $slug = Text::slug(strtolower($this->_properties['titulo']));
        }
        return $slug;
    }

    
}
