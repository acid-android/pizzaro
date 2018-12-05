<?php
namespace App\Services;

use App\Menu;

class TypesMenuService {

    protected $menu;

    public function __construct()
    {
        $this->menu = Menu::all();
    }

    public function __invoke()
    {
        return $this->menu = Menu::all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getMenu()
    {
        return $this->menu;
    }
}