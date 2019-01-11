<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuRemoveController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        if($model = Menu::find($id)){
            $model->delete();
        }

        return redirect()->back();
    }
}
