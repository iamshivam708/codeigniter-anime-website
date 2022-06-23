<?php

namespace App\Controllers;
use App\Models\CategoriesModel;

class Categories extends \CodeIgniter\Controller{
    public function __construct(){
        helper('form');
    }
    
    public function show(){
         $model = new CategoriesModel;
         $data['categories'] = $model->showCategory();
         return view('category/show_category',$data);
    }
    
    public function create(){
        if($this->request->getMethod() === 'post'){
            
            $model = new CategoriesModel;
            $model->save([
            'cat_name' => $this->request->getPost('cat_name')
            ]);
            return redirect()->to(site_url("admin/category/show"));
        }
        return view('category/create_category');
        
    }
    
    public function update($id){
        $data = [];
        $model = new CategoriesModel;
        $data['categories'] = $model->getRow($id);
        view('category/update_category',$data);
        
        if($this->request->getMethod() == 'post'){
            $model = new CategoriesModel();
            $model->update($id,[
                'cat_name' => $this->request->getPost('cat_name')
            ]);
            return redirect()->to(site_url("admin/category/show"));
        }
        return view('/category/update_category',$data);
    }
    
    public function delCategory($id){
        
        $model = new CategoriesModel();
        $model->delete($id);
        return redirect()->to("admin/category/show");
    }
    
}
