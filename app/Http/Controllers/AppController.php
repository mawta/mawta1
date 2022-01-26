<?php

namespace App\Http\Controllers;

use App\Services\AppServices;
use Illuminate\Http\Request;

class AppController extends Controller
{
    protected $service;

    public function __construct(AppServices $service)
    {
        $this->service = $service;
    }

    public function index(){
        return $this->service->index();
    }
}
