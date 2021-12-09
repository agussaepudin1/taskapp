<?php

namespace App\Controllers;

//use App\Entities\Task;

class Login extends BaseController
{
    //private $model;

    public function __construct()
    {
        //$this->model = new \App\Models\TaskModel;
    }

    public function index()
    {
        //$data = $this->model->findAll();

        return view('Login/index');
        //return view('Login/index', ['tasks' => $data]);
    }
}