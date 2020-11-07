<?php namespace App\Controllers\Supplier;

class Home extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		echo view('templates/header',$data);
		echo view('supplier/supplier_home',$data);
		echo view('templates/footer',$data);

	}

	//--------------------------------------------------------------------

}
