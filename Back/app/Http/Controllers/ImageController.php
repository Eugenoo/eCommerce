<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Image;

class ImageController extends Controller
{
    public function index(){
        echo("Hello World!");
    }

    public function getPhoto($product){
        $storagePath = storage_path('/app/'.$product."_photo.png" );

        return response()->file($storagePath);
    }

}
