<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Menu;

class AccountController extends Controller {
    public function login () {
        Session::set('name', request()->input('name'));
        Session::set('navData', MenuData::jsonMenu());
        return redirect('/enterprise');
    }
}

class MenuData {

    public static function jsonMenu() {
        $menus = Menu::where('depth', 1)->get();
        $submenus = menu::where('depth', 2)->get();

        function getSubs($subs, $mid) {
            $submenu = array();
            foreach ($subs as $sub) {
                if ($sub->parent_id == $mid) {
                    array_push($submenu, $sub);
                }
            }
            return $submenu;
        }

        $subList = array();

        foreach ($menus as $menu) {
            $subList[$menu->id] = getSubs($submenus, $menu->id);
        }

        return ['menus' => $menus, 'submenus' => $subList];
    }

}