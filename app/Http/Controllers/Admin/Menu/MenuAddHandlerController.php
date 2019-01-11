<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuAddHandlerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $model = new Menu();

        $post = $request->post();

        $model->name = $post['name'];
        $model->key = $post['key'];
        $model->icon = $post['icon'];
        $model->order = $post['order'];


        $model->save();

        return redirect()->route('admin-menu');
    }
}
