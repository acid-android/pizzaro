<?php

namespace App\Http\Controllers\Admin\Food;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FoodRemoveController extends Controller
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
        if($model = Product::find($id)){
            if($items = $model->items){
                foreach ($items as $item){
                    $item->delete();
                }
            }
            if(file_exists(public_path($model->image))) {
                unlink(public_path($model->image));
            }
            $model->delete();
        }

        return redirect()->back();
    }
}
