<?php

namespace App\Http\Controllers\Admin\Food;

use App\Menu;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $model = Product::find($id);

        return view('admin.food.update', [
            'model' => $model
        ]);
    }

    public function store(Request $request, $id){
        $model = Product::find($id);

        $post = $request->post();

        $model->name = $post['name'];
        $model->description = $post['description'];
        $model->menu_id = $post['menu'];
        $model->key = $post['key'];

        $menuItem = Menu::find($model->menu_id);
        $imagePath = 'images/' . $menuItem->key;
        if($file = $request->file('image')){
            if(file_exists(public_path($model->image))) {
                unlink(public_path($model->image));
            }
            $name = $model->name . '.' . $file->getClientOriginalExtension();

            $file->move('images/' . $menuItem->key, $name);

            $model->image = $imagePath . '/'. $name;
        }
        $model->save();

        return view('admin.food.update', [
            'model' => $model
        ]);
    }
}
