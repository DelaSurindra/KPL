<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{

	protected $user;

	function __construct() {
		helper('form');
		helper('url');

		$this->user = new UserModel();
	}

	public function index()
	{
        $title = "Login";
        
        return view('pages/login', compact('title'));
	}

	public function auth() {
		$username = $this->request->getVar("username");
		$password = $this->request->getVar("password");

		$login = $this->user->where("username", $username)->first();

		if ($login) {
			if ($password == $login["password"]) {
				session()->set([
					"username" => $login["username"],
					"logged_in" => TRUE
				]);
				return redirect()->to("/");
			} else {
				session()->setFlashdata('error', 'Username & Password Salah');
				return redirect()->back();
			}
		} else {
			session()->setFlashdata('error', 'Username & Password Salah');
			return redirect()->back();
		}
	}
	
	public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}
