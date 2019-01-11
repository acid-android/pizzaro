<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Services\TypesMenuService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TypesMenuService $menu)
    {
        return view('admin.menu.index', [
            'model' => $menu
        ]);
    }
}
