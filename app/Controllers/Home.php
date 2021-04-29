<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'view_list' => 'home',
			 'title' => 'หน้าแรก'
	      ];
		return view('layout/template',$data);
		
       
	}
}
