<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['edit', 'update'],
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id !== Auth::user()->id) {
            abort(403);
        }

        return view('user.edit');
    }


    public function update(UpdateUserRequest $request, $id)
    {
        if ($id !== Auth::user()->id) {
            abort(403);
        }

        Auth::user()->update([
            'name' => $request->get('name'),
            'password' => bcrypt($request->get('password')),
        ]);

        return redirect()->route('user.show', $id);
    }


    public function articles($id)
    {
        $user = User::findOrFail($id);

        return view('users.articles', [
            'articles' => $user->articles,
        ]);
    }


    public function comments($id)
    {
        $user = User::findOrFail($id);

        return view('user.comments', [
            'comments' => $user->comments()->with('article')->get(),
        ]);
    }


    public function favorites($id)
    {
        $user = User::findOrFail($id);

        return view('user.favorites', [
            'articles' => $user->favoriteArticles,
        ]);
    }


    public function categories($id)
    {
        $user = User::findOrFail($id);

        return view('user.categories', [
            'categories' => $user->categories,
        ]);
    }





}
