<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request){
        $photoFile=$request->file('photo');

        $fileSize=filesize($photoFile);
        $fileType=filetype($photoFile);
        $fileTempName=$photoFile->getFilename();
        $fileOriginalName=$photoFile->getClientOriginalName();
        $fileExtension=$photoFile->extension();

        return array(
            'photoFile'=>$photoFile,
            'fileSize'=>$fileSize,
            'fileType'=>$fileType,
            'fileTempName'=>$fileTempName,
            'fileOriginalName'=>$fileOriginalName,
            'fileExtension'=>$fileExtension
        );
    }
}
