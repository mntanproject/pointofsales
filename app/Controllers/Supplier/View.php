<?php namespace App\Controllers\Supplier;

class View extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		echo view('templates/header',$data);
		echo view('supplier/supplier_view',$data);
		echo view('templates/footer',$data);

	}

	//--------------------------------------------------------------------

}
