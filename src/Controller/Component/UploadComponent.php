<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class UploadComponent extends Component{
    public $max_files = 1;

    public function send($data, $id = null){
        $filename       = $data['name'];
        $file_tmp_name  = $data['tmp_name'];

      
        $dir = WWW_ROOT.'/publico/img';

        if(is_uploaded_file($file_tmp_name)){
            move_uploaded_file($file_tmp_name, $dir.DS.$filename);
        }
    }
}