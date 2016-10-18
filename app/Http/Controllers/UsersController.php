<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Auth;

class UsersController extends Controller
{

    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['edit', 'update'],
        ]);
    }


    /**
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $comments = $user->comments()->with('article')->Recent()->take(5)->get();
        $favorites = $user->favoriteArticles()->Recent()->take(5)->get();
        $articles = $user->articles()->Recent()->take(5)->get();

        return view('users.show', compact('user', 'comments', 'favorites', 'articles'));
    }


    /**
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id != Auth::user()->id) {
            abort(403);
        }

        return view('users.edit', [
            'user' => Auth::user(),
        ]);
    }


    /**
     * @param UpdateUserRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateUserRequest $request, $id)
    {
        if ($id != Auth::user()->id) {
            abort(403);
        }

        $user = Auth::user();

        if(
            $request->get('name') != $user->name ||
            bcrypt($request->get('password')) != $user->password
        ) {
            $user->name = $request->get('name');
            if($request->get('password')) {
                $user->password = bcrypt($request->get('password'));
            }
            $user->save();
        }

        Auth::logout();

        return redirect('/login');
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articles($id)
    {
        $user = User::findOrFail($id);

        return view('users.articles', [
            'articles' => $user->articles()->Recent()->paginate(22),
            'user' => $user,
        ]);
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function comments($id)
    {
        $user = User::findOrFail($id);
        $comments = $user->comments()->Recent()->with('article')->paginate(22);

        return view('users.comments', compact('user', 'comments'));
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function favorites($id)
    {
        $user = User::findOrFail($id);

        return view('users.favorites', [
            'articles' => $user->favoriteArticles()->Recent()->paginate(22),
            'user' => $user,
        ]);
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categories($id)
    {
        $user = User::findOrFail($id);

        return view('users.categories', [
            'categories' => $user->categories()->Recent()->get(),
            'user' => $user
        ]);
    }

}
