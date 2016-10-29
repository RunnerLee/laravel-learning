<?php

namespace App\Http\Controllers;

use App\Models\Revisions;

class LogsController extends Controller
{


    public function index()
    {
        $revisions = Revisions::with('user')->get();

        dump($revisions);
        exit;

        return view('logs.index', compact('revisions'));
    }

}
