<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';
        $user->save();

        $user->wasChanged(); // true [cite: 502]
        $user->wasChanged('username'); // true [cite: 503]
        $user->wasChanged(['username', 'level_id']); // true [cite: 504]
        $user->wasChanged('nama'); // false [cite: 505]

        dd($user->wasChanged(['nama', 'username'])); // true [cite: 506]
    }
}