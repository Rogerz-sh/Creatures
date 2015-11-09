<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller {
    public function login () {
        Session::put('name', request()->input('name'));
        return redirect('/enterprise');
    }
}