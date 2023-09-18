<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    public function attendance($product)
    {
        echo $product;
    }
    
    public function Enuj06()
    {
        return view('attendances');
    }
    public function index()
    {
        //
    }
}
