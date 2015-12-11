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
use Illuminate\Support\Facades\DB;

class SiteController extends BaseController {

    public function getJob($id) {
        return view('site.job')->with('navIndex', -1)->with('id', $id);
    }

    public function getJobData($id) {
        $job = VirtualJob::find($id);
        return response($job);
    }

    public function getAreaJobListData() {
        $job = DB::table('virtual-jobs')->select('id', 'job_name', 'salary', 'company_name', 'industry as type')->where('deleted_at', null)->where('showing', 1)->get();
        return response($job);
    }

    public function getArticleListData() {
        $article = DB::table('articles')->select('id', 'title', 'publish', 'type')->where('deleted_at', null)->where('showing', 1)->get();
        return response($article);
    }

    public function getHunter() {
        return view('site.hunter')->with('navIndex', 1);
    }

    public function getTrain() {
        return view('site.train')->with('navIndex', 2);
    }

    public function getJoin() {
        return view('site.join')->with('navIndex', 6);
    }

    public function getArticle($id) {
        return view('site.article')->with('navIndex', -1)->with('id', $id);
    }

    public function getArticleData($id) {
        $art = Article::find($id);
        return response($art);
    }

}
