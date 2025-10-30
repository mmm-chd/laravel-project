<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Profile',
            'nama' => 'Severus Melvin',
            'kelas' => 'XI PPLG 2',
            'sekolah' => 'SMK Raden Umar Said Kudus'
        ];
        return view('pages.profile', $data);
    }
}
