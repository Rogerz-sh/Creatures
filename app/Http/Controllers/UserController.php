<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/14
 * Time: 上午12:00
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function index () {
        return view('user.index');
    }

    public function login () {
        return view('user.login');
    }
}