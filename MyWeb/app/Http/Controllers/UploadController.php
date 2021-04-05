<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   public function showUploadFile(Request $request){
    $file = $request->file('image');
    
    echo 'File Name: '.$file->getClientOriginalName();
    echo '<br>';

    echo 'File extension: '.$file->getClientOriginalExtension();
    echo '<br>';
    echo 'File real path: '.$file->getRealPath();
    echo '<br>';
     echo 'File size: '.$file->getSize();
    echo '<br>';
    echo 'File Mime Type: '.$file->getMimeType();

    $destinationPath = 'uploads';
    $file->move($destinationPath,$file->getClientOriginalName());
   }
}
