<?php
namespace App\Models;

class AnimeMovieModel extends \CodeIgniter\Model{
    protected $table = 'anime_movies';
    protected $allowedFields = ['title','japanese_title','story','genres','image','trailer','release_date','subbed_link','dubbed_link'];
    
    public function getRecords(){
        return $this->orderBy('id','DESC')->findAll(8);
    }
    public function getRow($id){
        return $this->where('id',$id)->first();
    }
    public function getAll(){
        return $this->orderBy('id','DESC')->findAll();
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
}
