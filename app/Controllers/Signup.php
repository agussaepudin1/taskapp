<?php

namespace App\Controllers;

//use \App\Entities\Signup;

class Signup extends BaseController
{
    public function new()
    {
        //$signup = new Signup;

        return view('Signup/new');
    }

    public function create()
    {
        $user = new \App\Entities\User($this->request->getPost());

        $model = new \App\Models\UserModel;

        if ($model->insert($user)){
            return redirect()->to("/signup/success");
        }
        else{
            return redirect()->back()
                             ->with('errors',$model->errors())
                             ->with('warning', 'Invalid data')
                             ->withInput();
        }
    }

    public function success()
    {
        return view('Signup/success');
    }
}

?>