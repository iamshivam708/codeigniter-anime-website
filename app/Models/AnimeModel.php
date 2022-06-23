<?php

namespace App\Models;

class AnimeModel extends \CodeIgniter\Model {
    protected $table = 'anime';
    protected $allowedFields = ['title','japanese_title','episodes','seasons','story','genres','image','trailer'];
    
    public function getRecords(){
        return $this->orderBy('id','DESC')->findAll(8);
    }
    
    public function getRow($id){
        return $this->where('id',$id)->first();
    }
    
    public function getSearch($query){
        if($this->like('title',$query)->findAll() == []){
            return $this->like('japanese_title',$query)->findAll();
        }else{
            return $this->like('title',$query)->findAll();
        }   
    }
    
    public function getCategory($query){
        return  $this->like('genres', $query)->findAll();
    }
    
    public function getAll(){
        return $this->orderBy('id','DESC')->findAll();
    }
}
?>