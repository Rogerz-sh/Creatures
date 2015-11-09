<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    public $timestamps = false;
}

class EnterpriseController extends BaseController {
    public function getIndex () {
        Session::set('menus', Menu::all());
        return view('enterprise.index', ['url' => '/']);
    }

    public function getJob () {
        return view('enterprise.job', ['url' => '/job']);
    }

    public function getMenu () {
        return Menu::all();
    }
}