<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function register()
	{
		$data['title'] = 'Register';
		return view('auth/register', $data);
	}

	public function user()
	{
		$data['title'] = 'Beranda';
		return view('auth/beranda', $data);
	}
}
