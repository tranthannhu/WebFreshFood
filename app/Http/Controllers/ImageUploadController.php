<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ImageUploadController extends Controller
{
    //
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
                'file' => 'required|mimes:doc,png,jpeg,jpg,docx,pdf,txt|max:2048',
            ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }


        if ($files = $request->file('file')) {

            //store file into document folder
            $file = $files->store('public/documents');
//            dd($file);
            //store your file into database
//            $document = new Document();
//            $document->title = $file;
//            $document->user_id = $request->user_id;
//            $document->save();

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => basename($file)
            ]);

        }


    }

    public function displayImage($filename)

    {
//        dd($request->all());
//        $filename = $request->filename;

//        $path = storage_path($filename);
        $path = storage_path('app/public/documents/' . $filename);

//        dd($path);
        if (!File::exists($path)) {

            abort(404);

        }
//

        $file = File::get($path);

        $type = File::mimeType($path);


        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);


        return $response;

    }
}
