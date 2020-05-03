<?php

namespace App\Http\Controllers\Backend\Article;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        return view('Backend.article.index')->withArticles(Article::orderBy('id', 'desc')->paginate(5));
    }

    public function create()
    {
        return view('Backend.article.create');
    }

    public function store(CreateArticleRequest $request)
    {
        dd($request->all());
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $file->move('upload/images/article', $file->getClientOriginalName());
            Article::create([
                'title' => $request->name,
                'desc' => $request->desc,
                'content' => $request->all()['content_article'],
                'img' => $file->getClientOriginalName(),
                'id_admin' => Auth::user()->id,
            ]);
            return redirect()->route('admin.article')->withFlashSuccess(__('alert.created'));
        }
    }

    public function detail($id)
    {
        return view('Backend.article.update')->withArticle(Article::findOrFail($id));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $file->move('upload/images/article', $file->getClientOriginalName());
            Article::find($id)->update([
                'title' => $request->name,
                'desc' => $request->desc,
                'content' => $request->all()['content_article'],
                'img' => $file->getClientOriginalName()
            ]);

        } else
         {
            Article::find($id)->update([
                'title' => $request->name,
                'desc' => $request->desc,
                'content' => $request->all()['content_article']
            ]);
         }
        return redirect()->route('admin.article')->withFlashSuccess(__('alert.updated'));
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('admin.article')->withFlashSuccess(__('alert.deleted'));
    }
}
