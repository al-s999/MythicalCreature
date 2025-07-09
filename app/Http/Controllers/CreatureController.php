<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    /**
     * Menampilkan daftar semua makhluk mitologi.
     */
    public function index()
    {
        $creatures = Creature::all();
        return view('pages.home', compact('creatures'));
    }

    /**
     * Menampilkan detail makhluk mitologi.
     */
    public function show($slug)
    {
        $creature = Creature::where('slug', $slug)->firstOrFail();
        return view('pages.detail', compact('creature'));
    }
}
