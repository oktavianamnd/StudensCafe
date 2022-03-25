<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if($role=='admin')
        {
            return redirect(route('admin.index'));
        }

        if($role=='manajer')
        {
            return redirect(route('manajer.index'));
        }

        if($role=='kasir')
        {
            return redirect(route('kasir.index'));
        }

        else
        {
            return view('dashboard');
        }
    }
}
