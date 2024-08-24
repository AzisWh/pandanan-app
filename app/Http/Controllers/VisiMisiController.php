<?php

namespace App\Http\Controllers;

use App\Models\visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = visimisi::all();
        return view('admin.visimisi.index',compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cardtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        visimisi::create($validated);

        return redirect()->route('visimisi.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visimisi = visimisi::findOrFail($id);
        return view('admin.visimisi.update', compact('visimisi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visimisi = visimisi::findOrFail($id);
        return view('admin.visimisi.update', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $visimisi = visimisi::findOrFail($id);

        $validated = $request->validate([
            'cardtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $visimisi->update($validated);

        return redirect()->route('visimisi.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visimisi = visimisi::findOrFail($id);

        $visimisi->delete();
        return redirect()->route('visimisi.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
