<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestAnime extends \CodeIgniter\Model{
    protected $table = "request";
    protected $allowedFields = ['name','email','anime_name'];
}
