<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function controlPanelProva(){
        return view('controlPanelProva');
    }

    public function panel(){
        return view('panel');
    }

    public function controlPanel(){
        return view('controlPanel');
    }
}
