<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::paginate(20);
        return view('admin.dashboard', compact('users'));
    }

    public function getUsers()
    {
        $users = User::paginate(20);
        return view('admin.users.index', compact('users'));
    }
}
