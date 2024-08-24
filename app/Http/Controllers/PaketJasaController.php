<?php

namespace App\Http\Controllers;

use App\Models\PaketJasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paketJasa = PaketJasa::all();
        return view('admin.paketjasa.index',compact('paketJasa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.paketjasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('PaketJasa', $originalName, 'public');
            $validated['image'] = $path;
        }

        PaketJasa::create($validated);

        return redirect()->route('paketjasa.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paketJasa = PaketJasa::findOrFail($id);
        return view('admin.paketjasa.update', compact('paketJasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paketJasa = PaketJasa::findOrFail($id);
        return view('admin.paketjasa.update', compact('paketJasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paketJasa = PaketJasa::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            //Hapus gambar lama jika ada
            if ($paketJasa->image && Storage::disk('public')->exists($paketJasa->image)) {
                Storage::disk('public')->delete($paketJasa->image);
            }

            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('PaketJasa', $originalName, 'public');
            $validated['image'] = $path;
        }

        $paketJasa->update($validated);

        return redirect()->route('paketjasa.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paketJasa = PaketJasa::findOrFail($id);

        // Hapus gambar jika ada
        if ($paketJasa->image && Storage::disk('public')->exists($paketJasa->image)) {
            Storage::disk('public')->delete($paketJasa->image);
        }

        $paketJasa->delete();
        return redirect()->route('paketjasa.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
