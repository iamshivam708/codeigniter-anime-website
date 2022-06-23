<?php
namespace App\Controllers;
use App\Models\AnimeModel;
use App\Models\AnimeMovieModel;

class Admin extends \CodeIgniter\Controller{
    
    public function __construct(){
        helper('form');
    }
    
    public function show(){
        $model = new AnimeModel();
        $data['animes'] = $model->getRecords();
        return view('anime/show_anime', $data);
    }
    
    public function create(){
        if($this->request->getMethod() == 'post'){
            
            $file = $this->request->getFile('image');
            if($file->isValid() && !$file->hasMoved()){
                $newName = $file->getRandomName();
                if($file->move(FCPATH.'uploads/',$newName)){
                    $model = new AnimeModel();
                    $model->save([
                        'title' =>$this->request->getPost('title'),
                        'japanese_title' => $this->request->getPost('japanese_title'),
                        'episodes' => $this->request->getPost('episodes'),
                        'seasons' =>  $this->request->getPost('seasons'),
                        'story' => $this->request->getPost('story'),
                        'genres' => $this->request->getPost('genres'),
                        'trailer' => $this->request->getPost('trailer'),
                        'image'   => $newName
                    ]);
                    return redirect()->to(site_url('admin/show'));
                }else{
                    echo $file->getErrorString()."".$file->getError();
                }
            }
        }
        return view('anime/create_anime');
    }
    
   
    public function update($id){
        
        $model = new AnimeModel();
        $anime = $model->getRow($id);
        
        $data = [];
        $data['anime'] = $anime;
        if($this->request->getMethod() == 'post'){
                     
            $file = $this->request->getFile('image');
            $newName = $file->getRandomName();
            $file->move(FCPATH.'uploads/'.$newName);
            $model = new AnimeModel();
            $model->update($id,[
                'title' =>$this->request->getPost('title'),
                'japanese_title' => $this->request->getPost('japanese_title'),
                'episodes' => $this->request->getPost('episodes'),
                'seasons' =>  $this->request->getPost('seasons'),
                'story' => $this->request->getPost('story'),
                'genres' => $this->request->getPost('genres'),
                'trailer' => $this->request->getPost('trailer'),
                'image'   => $anime['image']| $newName
            ]);
             return redirect()->to(site_url("admin/show"));
        }
        return view('anime/update_anime',$data);
    }
    
    public function createMovie(){
        if($this->request->getMethod() == 'post'){
            
            $file = $this->request->getFile('image');
            if($file->isValid() && !$file->hasMoved()){
                $newName = $file->getRandomName();
                if($file->move(FCPATH.'uploads/',$newName)){
                    $model = new AnimeMovieModel();
                    $model->save([
                        'title' =>$this->request->getPost('title'),
                        'japanese_title' => $this->request->getPost('japanese_title'),
                        'story' => $this->request->getPost('story'),
                        'genres' => $this->request->getPost('genres'),
                        'trailer' => $this->request->getPost('trailer'),
                        'image'   => $newName,
                        'release_date' => $this->request->getPost('release_date'),
                        'subbed_link' => $this->request->getPost('subbed_link'),
                        'dubbed_link' => $this->request->getPost('dubbed_link')
                    ]);
                    return redirect()->to(site_url('admin/movie/show'));
                }else{
                    echo $file->getErrorString()."".$file->getError();
                }
            }
        }
        return view('anime_movie/create');
    }
    
    public function showMovie(){
        $model = new AnimeMovieModel();
        $data['movies'] = $model->getRecords();
        return view('anime_movie/show', $data);
    }
    
    
}
