<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Auth;

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


    /**
     * @param StoreArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreArticleRequest $request)
    {
        $this->authorize('have', Category::find($request->input('category_id')));

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
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::with('user', 'comments')->findOrFail($id);

        $isCollected = false;

        if(Auth::check() && $article->collectors()->find(Auth::id())) {
            $isCollected = true;
        }

        $article->increment('view_count', 1);

        return view('articles.show', compact('article', 'isCollected'));
    }


    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('update', $article);

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


    /**
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
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
        }

        return response()->json([
            'status' => 200,
        ]);
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function downFavorite($id)
    {
        $article = Article::findOrFail($id);

        if($favorite = $article->favorites()->ByUserId(Auth::id())->first()) {
            $favorite->delete();
        }

        return response()->json([
            'status' => 200,
        ]);
    }


    /**
     * @param StoreCommentRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function comment(StoreCommentRequest $request, $id)
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

        $data = [
            'user_id' => Auth::id(),
            'article_id' => $id,
            'original_content' => $request->input('original_content'),
            'compiled_content' => convert_markdown_to_html($request->input('original_content')),
        ];
        $data['short_content'] = mb_substr(strip_tags($data['compiled_content']), 0, 20);

        Comment::create($data);

        return redirect()->route('articles.show', $id);
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $this->authorize('delete', $article);

        $article->delete();

        return response()->json([
            'status' => 200,
        ]);
    }
}
