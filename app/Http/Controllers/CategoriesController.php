<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Models\Article;
use App\Models\Category;
use Auth;

class CategoriesController extends Controller
{

    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show'],
        ]);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        return redirect()->route('articles.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('categories.create_edit');
    }


    /**
     * @param StoreCategoriesRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoriesRequest $request)
    {
        Category::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'user_id' => Auth::id()
        ]);

        return redirect()->route('users.categories', Auth::id());
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $articles = $category->articles()->Recent()->paginate(10);

        return view('categories.show', compact('category', 'articles'));
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->authorize('update', $category);

        return view('categories.edit', compact('category'));
    }


    /**
     * @param StoreCategoriesRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreCategoriesRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $this->authorize('update', $category);

        $category->name = $request->get('name');
        $category->title = $request->get('title');
        $category->save();

        return redirect('users.categories', $category->user_id);
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $this->authorize('delete', $category);

        Article::where('category_id', $id)->delete();
        $category->delete();

        return response()->json([
            'status' => 200,
        ]);
    }
}
