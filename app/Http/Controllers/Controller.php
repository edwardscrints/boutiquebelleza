<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    /*public function banner()
    {
        $sliders = [
            ['name' => 'Cabello', 'image' => 'storage/Banners/banner.jpg'],
            ['name' => 'Maquillaje', 'image' => 'storage/Banners/banner2.jpg'],
            ['name' => 'Uñas', 'image' => 'storage/Banners/banner3.jpg'],
            ['name' => 'Sex Shop', 'image' => 'storage/Banners/banner4.jpg'],
        ];
        
        return view('components.welcome-banner', compact('sliders'));
    }*/
}
