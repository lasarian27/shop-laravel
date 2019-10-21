<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRole;
use App\Http\Requests\VisitRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;

class PSDController extends Controller
{
    public function index()
    {
        return view('psd.index');
    }

    public function about()
    {
        return view('psd.about');
    }

    public function services()
    {
        return view('psd.services');
    }

    public function blog()
    {
        return view('psd.blog');
    }

    public function features()
    {
        return view('psd.features');
    }
}
