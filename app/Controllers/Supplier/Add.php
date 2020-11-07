<?php namespace App\Controllers\Supplier;

class Add extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);
		echo view('templates/header',$data);
		echo view('supplier/supplier_add',$data);
		echo view('templates/footer',$data);

	}

	//--------------------------------------------------------------------

}
