<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//作成したバリデーションを使用する
use App\Http\Requests\ValidateTestRequest;

class ValidateController extends Controller
{
    public function index(Request $request)
    {
        return view('create');
    }
 
    public function create(ValidateTestRequest $request)
    {
        return view('create');  
    }
}
