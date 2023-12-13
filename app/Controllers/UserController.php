<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
class UserController extends ResourceController
{
    public function index()
    {
        //
    }

    public function getData()
    {
        $main = new UserModel();
        $data = $main->findAll();
        return $this->respond($data);
    }


}
