<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $data = [
            'users' => User::inrandomorder()->get(),
        ];

        return view('users',$data);
    }
}
