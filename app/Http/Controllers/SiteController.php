<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\VirtualJob;
use App\Article;

class SiteController extends BaseController {

    public function getJob($id) {
        return view('site.job')->with('navIndex', -1)->with('id', $id);
    }

    public function getJobData($id) {
        $job = VirtualJob::find($id);
        return response($job);
    }

    public function getHunter() {
        return view('site.hunter')->with('navIndex', 1);
    }

    public function getTrain() {
        return view('site.train')->with('navIndex', 2);
    }

    public function getArticle($id) {
        return view('site.article')->with('navIndex', -1)->with('id', $id);
    }

    public function getArticleData($id) {
        $art = Article::find($id);
        return response($art);
    }

}
