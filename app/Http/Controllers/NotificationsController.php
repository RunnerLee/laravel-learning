<?php

namespace App\Http\Controllers;

use Auth;


class NotificationsController extends Controller
{


    public function index()
    {
        $notifications = Auth::user()->notification;
        Auth::user()->notification_count = 0;
        Auth::user()->save();

        return view('notifications.index', compact('notifications'));
    }





}
