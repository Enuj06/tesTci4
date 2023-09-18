<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
class StudentController extends BaseController
{
    private $attendances;
    public function __construct(){
        $this->attendances = \App\Models\StudentModel;
    }
    public function attendance($attendance)
    {
        echo $attendance;
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
