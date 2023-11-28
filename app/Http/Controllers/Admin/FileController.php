<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function index() {
        $files = File::where("user_id",Auth::id())->get();
        return view('backend.files',["files"=>$files]);
        
    }
    public function create() {
        return view('backend.create-file');
        
    }


    public function store(Request $request){
        $type = array(
            "jpg" => "image",
            "jpeg" => "image",
            "png" => "image",
            "svg" => "image",
            "webp" => "image",
            "gif" => "image",
            "mp4" => "video",
            "mpg" => "video",
            "mpeg" => "video",
            "webm" => "video",
            "ogg" => "video",
            "avi" => "video",
            "mov" => "video",
            "flv" => "video",
            "swf" => "video",
            "mkv" => "video",
            "wmv" => "video",
            "wma" => "audio",
            "aac" => "audio",
            "wav" => "audio",
            "mp3" => "audio",
            "zip" => "archive",
            "rar" => "archive",
            "7z" => "archive",
            "doc" => "document",
            "txt" => "document",
            "docx" => "document",
            "pdf" => "document",
            "csv" => "document",
            "xml" => "document",
            "ods" => "document",
            "xlr" => "document",
            "xls" => "document",
            "xlsx" => "document"
        );


        foreach($request->file("images") as $file ){

            $fileType = $type[$file->extension()];
            if($fileType){
                $tmp_file = new  File();
                $tmp_file->name=$file->hashName();
                $path = $file->store("public");
                $tmp_file->location=$path;
                $tmp_file->type=$fileType;
                $tmp_file->extension=$file->extension();

                $tmp_file->save();
            }

        }

        return redirect()->back();



    }
}
