<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleImage;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function detailsview()
    {
        $images = MultipleImage::all();
        return view('detailspage', compact('images'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);
      
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $image_name = md5(rand(1000, 10000));
                  $ext = strtolower($file->getClientOriginalExtension());
                  $image_full_name = $image_name.'.'.$ext;
                  $file->move(public_path().'/uploads/', $image_full_name);  
                  $image[] = $image_full_name;
              }
      
              $fileModal = new MultipleImage();
              $fileModal->name = json_encode($image);
              $fileModal->image_path = json_encode($image);
             
              $fileModal->save();
      
             return back()->with('success', 'File has successfully uploaded!');
          }
    }
    public function deleteAlbum($id)
    {
        $image = MultipleImage::find($id);
        $imagepath = '/uploads/'.$image->image_path;
        if(File::exists($imagepath)){

            File::delete($imagepath);            
        }
        $image->delete();   
        return back()->with('success', 'File has successfully Deleted!');     
    }
}
