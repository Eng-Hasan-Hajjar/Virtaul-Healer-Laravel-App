<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function departmentswiper()
    {

        return view('departments.departmentswiper');
    }
}
