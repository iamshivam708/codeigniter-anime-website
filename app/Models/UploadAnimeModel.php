<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadAnimeModel extends \CodeIgniter\Model{
    protected $table = "anime_download";
    protected $allowedFields = ['anime_id','season','episode','subbed_link','dubbed_link'];
    
    public function getRow($id,$season){
        $array = array('anime_id' => $id, 'season' => $season);
        return $this->where($array)->findAll();
    }
}
