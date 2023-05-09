<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CrudController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $task = new LaravelCrud;
        $task->name = $request->name;
        $task->save();
    }
    public function edit()
    {
        return view('edit');
    }
    public function update()
    {
        return view('edit');
    }

}
