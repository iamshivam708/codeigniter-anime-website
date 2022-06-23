<?php
namespace App\Models;

class CategoriesModel extends \CodeIgniter\Model{
    protected $table = 'categories';
    protected $allowedFields = ['cat_name'];
    
    public function showCategory(){
        return $this->findAll();
    }
    
    public function getRow($id){
        return $this->where('id',$id)->first();
    }
}
