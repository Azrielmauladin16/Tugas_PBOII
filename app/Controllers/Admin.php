<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		return view('vw_home');
	}
    public function dashboard()
	{
		return view('Templete/dashboard');
	}
}