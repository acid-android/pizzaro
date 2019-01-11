<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $model = Menu::find($id);

        return view('admin.menu.update', [
            'model' => $model
        ]);
    }

    public function store(Request $request, $id)
    {
        $post = $request->post();

        $model = Menu::find($id);

        $model->name = $post['name'];
        $model->key = $post['key'];
        $model->icon = $post['icon'];
        $model->order = $post['order'];


        $model->save();

        return redirect()->route('admin-menu');

    }
}
