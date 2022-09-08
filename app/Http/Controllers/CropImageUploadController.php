<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class CropImageUploadController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('image-crop')->with(compact('images'));
    }

    public function store(Request $request)
    {
        $name = uniqid() . '.png';
        $path = '/storage/upload/' . $name;
        $request->file('image')->move(public_path('/storage/upload'), $name);
        Image::create([
            'title' => $path
        ]);
        return response()->json(['success'=>'Crop Image Saved/Uploaded Successfully using jQuery and Ajax In Laravel']);
    }
}
