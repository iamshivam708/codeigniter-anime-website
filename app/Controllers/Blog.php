<?php

namespace App\Controllers;
use App\Models\RequestAnime;
use App\Models\AnimeModel;
use App\Models\CategoriesModel;
use App\Models\AnimeMovieModel;
use App\Models\UploadAnimeModel;

class Blog extends \CodeIgniter\Controller{
    public function index(){
        
        $model = new AnimeModel();
        $model2 = new CategoriesModel();
        $model3 = new AnimeMovieModel();
        $data['animes'] = $model->getRecords();
        $data['categories'] = $model2->showCategory();
        $data['movies'] = $model3->getRecords();
        return view('show',$data);
    }
    
    public function request(){
        $session = \Config\Services::session();
        helper('form');
        $data = [];
        
        if($this->request->getMethod() == 'post'){
            $input = $this->validate([
                'name'=> 'required',
                'email'=>'required',
                'anime_name' => 'required'
            ]);
            if($input == true){
                
                $model = new RequestAnime();
                $model->save([
                    'name'=>$this->request->getPost('name'),
                    'email'=>$this->request->getPost('email'),
                    'anime_name'=>$this->request->getPost('anime_name')
                ]);
                $session->setFlashdata('success','Thanks For Your Request, Your request will be processed shortly!');
                return redirect()->to('blog');
                
            }else{
                $data['validation']  = $this->validator;
            }
        }
        
        return view('request',$data);
    }
    
    public function single($id){
        
        $model = new AnimeModel();
        $model2 = new CategoriesModel();
        $model3 = new UploadAnimeModel();
        
        $data['single'] = $model->getRow($id);
        $data['categories'] = $model2->showCategory();
        
        $season = $data['single']['seasons'];
        $data['downloads'] = $model3->getRow($id, $season);
        
       return view('single',$data);
    }
    
    public function search(){
        $data = [];
        if($this->request->getMethod() == 'post'){
            $model = new AnimeModel();
            $model2 = new AnimeMovieModel();
            
            $search = $this->request->getPost('search');
            
            $data['search'] = $model->getSearch($search);
            $data['searchMovie'] = $model2->getSearch($search);
            $data['query'] = $search;
            return view('search',$data);
        }
        return view('search',$data);
    }
    
     public function category($query){
        
        $model = new AnimeModel();
        $model2 = new AnimeMovieModel();
        $data['categories'] = $model->getCategory($query);
        $data['categoryMovies'] = $model2->getCategory($query);
        $data['query'] = $query;
        return view('category',$data);
    }
    
    public function showAllAnimes(){
        $model = new AnimeModel();
        $data['animes'] = $model->getAll();
        return view('all_anime', $data);
    }
    
    public function showAllMovies(){
        $model = new AnimeMovieModel();
        $data['movies'] = $model->getAll();
        return view('all_movie', $data);
    }
    
    public function singleMovie($id){
        
        $model = new AnimeMovieModel();
        $model2 = new CategoriesModel();
        $data['single'] = $model->getRow($id);
        $data['categories'] = $model2->showCategory();
        return view('single_movie',$data);
    }
    
}
