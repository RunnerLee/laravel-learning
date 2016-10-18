<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;
use Gate;

class ArticlesController extends Controller
{

    /**
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show'],
        ]);
    }


    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Article $article)
    {
        $articles = $article->getArticles(10);

        return view('articles.index', compact('articles'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Auth::user()->categories;

        return view('articles.create_edit', compact('categories'));
    }


    public function store(StoreArticleRequest $request)
    {
        $article = Article::create([
            'user_id'           => Auth::id(),
            'category_id'       => $request->input('category_id'),
            'title'             => $request->input('title'),
            'original_content'  => $request->input('original_content'),
            'short_content'     => convert_markdown_to_pure($request->input('original_content')),
        ]);

        $article->category->increment('article_count', 1);

        return redirect()->route('articles.show', $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::with('user', 'comments')->findOrFail($id);

        $article->increment('view_count', 1);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Auth::user()->categories;

        return view('articles.create_edit', compact('article', 'categories'));
    }


    /**
     * @param StoreArticleRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('update', $article);

        $article->original_content = $request->input('original_content');

        if($article->category_id != $request->input('category_id')) {
            $article->category->decrement('articles_count', 1);
            Category::find($request->input('category_id'))->increment('articles_count', 1);
            $article->category_id = $request->input('category_id');
        }
        $article->title = $request->input('title');

        $article->save();

        return redirect()->route('articles.show', $id);
    }


    public function upFavorite($id)
    {
        $article = Article::findOrFail($id);
        if($article->user_id === Auth::id()) {
            abort(403);
        }

        if(!$article->favorites()->ByUserId(Auth::id())->first()) {
            $article->favorites()->create([
                'user_id' => Auth::id(),
                'article_id' => $id,
            ]);
            $article->increment('favorite_count', 1);
        }

        return response()->json([
            'status' => 200,
        ]);
    }


    public function downFavorite($id)
    {
        $article = Article::findOrFail($id);

        if($favorite = $article->favorites()->ByUserId(Auth::id())->first()) {
            $favorite->delete();
            $article->decrement('favorite_count', 1);
        }

        return response()->json([
            'status' => 200,
        ]);
    }


    public function comment(Request $request, $id)
    {
        $this->validate($request, [
            'original_content' => 'required|min:6',
        ]);

        $article = Article::findOrFail($id);

        if(
            ($latestComment = $article->latestComment()->ByUserId(Auth::id())->first()) &&
            ($latestComment->created_at->timestamp + 60) > time()
        ) {
            abort(403);
        }

        Comment::create([
            'user_id' => Auth::id(),
            'article_id' => $id,
            'original_content' => $request->input('original_content'),
            'short_content' => convert_markdown_to_pure($request->input('original_content'), 20),
        ]);

        return redirect()->route('articles.show', $id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $this->authorize('delete', $article);

        $article->category->decrement('articles_count', 1);

        $article->delete();

        return redirect()->route('users.articles', Auth::id());
    }
}
