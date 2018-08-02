<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function controlPanel(){
        return view('controlPanel');
    }
}
