<?php
/**
 * Created by PhpStorm.
 * User: Huy
 * Date: 1/26/2022
 * Time: 10:02 AM
 */

namespace App\Services;


class AppServices
{
    public function index()
    {
        $ver = 1;
        try{
            $ver = filemtime(public_path("/js/index.js"));
        }catch (\Exception $e){

        }
        $app = [
            'ver' => $ver,
        ];

        return view('app', compact('app'));
    }
}