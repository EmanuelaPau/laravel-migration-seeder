<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    //

    public function index()
    {
        return view('guest.train.index');

        $trainList = Train::orderBy('train_code')->get();
        return view('guest.train.index', compact('trainList'));
    }
}