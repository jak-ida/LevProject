<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadManager extends Controller
{
    public function upload(){
        return view("upload_csv");
    }
    public function uploadCsv(Request $request){
        $csv = $request->file('csv');
        $destinationPath = "upload_csv";

    }
}
