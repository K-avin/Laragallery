<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultipleImage;
use Illuminate\Support\Facades\File;
use App\Models\AlbumImage;


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
        $images = MultipleImage::all();
        return view('home', compact('images'));
    }

    public function homePage()
    {
        $images = MultipleImage::all();
        return view('welcome', compact('images'));
    }

    public function detailsview($id)
    {
        $images = AlbumImage::where('album_id', $id)
        ->get();
        $album = MultipleImage::find($id);
        $description = $album->description;
        $title = $album->title;
        return view('detailspage', compact('images', 'title', 'description'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
          ]);

          $album =new MultipleImage;
          $album->title = $request->title;
          $album->description = $request->description;
          $album->save();

          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                  $image_name = md5(rand(1000, 10000));
                  $ext = strtolower($file->getClientOriginalExtension());
                  $image_full_name = $image_name.'.'.$ext;
                  $file->move(public_path().'/uploads/', $image_full_name); 
                  
                  AlbumImage::create(['album_id' => $album->id ,'image' => $image_full_name]);
              }
      
             return back()->with('success', 'File has successfully uploaded!');
          }
    }
    public function deleteAlbum($id)
    {
        $image = MultipleImage::find($id);
        // $imagepath = '/uploads/'.$image->image;
        // if(File::exists($imagepath)){

        //     File::delete($imagepath);            
        // }
        $image->delete();   
        return back()->with('success', 'File has successfully Deleted!');     
    }
}
