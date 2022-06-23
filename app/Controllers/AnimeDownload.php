<?php
namespace App\Controllers;
use App\Models\UploadAnimeModel;

class AnimeDownload extends \CodeIgniter\Controller{
    public function __construct(){
        helper('form');
    }
    
   public function create(){
       if($this->request->getMethod() == 'post'){
           $model = new UploadAnimeModel();
           $model->save([
               'anime_id' => $this->request->getPost('anime_id'),
               'season' =>$this->request->getPost('season'),
               'episode' =>$this->request->getPost('episode'),
               'subbed_link' =>$this->request->getPost('subbed_link'),
               'dubbed_link' => $this->request->getPost('dubbed_link')
           ]);
           return redirect()->to('/admin/anime/download');
       }
       return view('anime/download');
   }
   
   public function show($id,$season){
       $model = new UploadAnimeModel();
       $data['downloads'] = $model->getRow($id, $season);
       echo "<pre>";
       print_r($data['downloads']);
       echo "</pre>";
   }
   
}
