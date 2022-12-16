<?php

namespace App\Controllers;
use App\Models\UserModel;


class Login extends BaseController{
	public function index()
	{
		$data['title'] = 'Login';
		echo view('backend/templates/html-header', $data);
		
		echo view('backend/pages/login');

		echo view('backend/templates/html-footer');
	}

    public function entrar(){

        $model = new UserModel();

        $user = $this->request->getVar('user');
        $senha = $this->request->getVar('senha');

        $data['usuarios'] = $model->getUser($user, $senha);

        // var_dump($data['usuarios']);
        // exit;
        

    if(empty($data['usuarios'])){
        return redirect()->to(base_url('login'));

    }else{
        $sessionData = [
            'user' => $data['usuarios']['usuario'],
            'logged_in' => TRUE,
        ];

        session()->set($sessionData);
        return redirect()->to(base_url('admin'));

    }


    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));

    }

}
