<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleImage extends Model
{
    use HasFactory;

    public $table = "images";

     protected $fillable = [
        'name',
        'image_path'
    ];

    public function firstImage(){

        return $this->hasOne(AlbumImage::class, 'album_id', 'id');
    }
    
}
