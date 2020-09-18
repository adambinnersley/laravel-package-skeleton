<?php

namespace VendorName\MyPackageName\Http\Controllers;

use Illuminate\Routing\Controller;
use VendorName\MyPackageName\Models\Example;
use VendorName\MyPackageName\Http\Requests\ExampleRequest;

class ExampleController extends BaseController
{
    public function index()
    {
        return view('example::index');
    }

    public function show($id)
    {
        $getExample = Example::find($id);
        
        return view('example::show')->with(['example' => $getExample]);
    }

    public function store(ExampleRequest $request)
    {
    }
}
