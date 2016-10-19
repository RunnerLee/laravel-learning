<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function image(Request $request)
    {
        if (! $file = $request->file('file')) {
            abort(403);
        }

        $filePath = app('Runner\Handlers\UploadImagesHandler')->load($file)->save();

        return response()->json([
            'filename' => url($filePath),
        ]);
    }


}
