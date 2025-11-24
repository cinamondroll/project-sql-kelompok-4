<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // TAMPIL SEMUA FILM + DROPDOWN
    public function index()
    {
        // SP: Ambil semua film
        $films = DB::select("CALL get_all_films()");

        // SP: Ambil kategori untuk dropdown
        $categories = DB::select("CALL get_categories()");

        return view('categories.index', compact('films', 'categories'));
    }

    // FILTER FILM BERDASARKAN KATEGORI
    public function byCategory($categoryName)
    {
        // SP FILTER
        $films = DB::select("CALL get_films_by_category(?)", [$categoryName]);

        // tetap ambil dropdown
        $categories = DB::select("CALL get_categories()");

        return view('categories.index', compact('films', 'categories', 'categoryName'));
    }
}
