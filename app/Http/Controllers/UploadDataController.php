<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UploadDataController extends Controller
{
    public function index()
    {
        return view('uploadpage');

    }

    public function store(Request $request)
    {
        $data=new product;

        if($request->file('file'))
        {
            $file=$request->file('fiile');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('stortage',$filename);

            $data->file=$filename;
        }

        $data->name=$request->name;
        $data->email=$request->email;

        $data->save();

        return redirect()->back();
    }
}
