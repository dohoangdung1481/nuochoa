<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sanpham = SanPham::find($id);
        return view('pages.chitietsanpham', compact('sanpham'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');  // Assuming the search parameter is 'search'

        // Query the database with a LIKE condition
        $sanpham = SanPham::where('ten_san_pham', 'like', '%' . $searchTerm . '%')->get();
        // Return the view with the search results
        return view('pages.timkiem', compact('sanpham', 'searchTerm'));
    }
}
