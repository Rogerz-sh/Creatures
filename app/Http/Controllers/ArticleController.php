<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Article;


class ArticleController extends BaseController {

    public function getIndex () {
        return view('article.index')->with('navIndex', 2);
    }

    public function getJsonArticleListData () {
        $data = Article::where('deleted_at', null)->get();
        return response($data);
    }

    public function getCreate () {
        return view('article.create')->with('navIndex', 2);
    }

    public function postCreate () {
        $art = request()->input('article');
        $article = new Article();
        foreach ($art as $key=>$value) {
            $article->$key = $value;
        }
        $article->save();
        return response($article->id);
    }

    public function getEdit($id) {
        return view('article.edit')->with('navIndex', 2)->with('id', $id);
    }

    public function getJsonArticleData ($id) {
        $article = Article::find($id)->first();
        return response($article);
    }

    public function postEdit () {
        $art = request()->input('article');
        $article = Article::find($art['id']);
        foreach ($art as $key=>$value) {
            $article->$key = $value;
        }
        $article->save();
        return response($article->id);
    }

    public function postDelete ($id) {
        $art = Article::find($id);
        $art->delete();
        return response($art->id);
    }
}