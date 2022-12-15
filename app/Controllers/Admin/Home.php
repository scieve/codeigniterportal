<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		echo view('backend/templates/html-header');
		echo view('backend/templates/header');

		echo view('backend/pages/home');

		echo view('backend/templates/footer');
		echo view('backend/templates/html-footer');
	}

	//--------------------------------------------------------------------

}
