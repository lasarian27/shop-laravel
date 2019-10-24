<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRole;
use App\Http\Requests\VisitRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;

class PSD2Controller extends Controller
{
    public function index()
    {
        return view('psd2.index');
    }
}
