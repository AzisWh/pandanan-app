<?php

namespace App\Http\Controllers;

use App\Models\LayananKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = LayananKami::all();
        return view('admin.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'accordionname' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Layanan', $originalName, 'public');
            $validated['image'] = $path;
        }

        LayananKami::create($validated);

        return redirect()->route('layanan.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan = LayananKami::findOrFail($id);
        return view('admin.layanan.update', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = LayananKami::findOrFail($id);
        return view('admin.layanan.update', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $layanan = LayananKami::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'accordionname' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            //Hapus gambar lama jika ada
            if ($layanan->image && Storage::disk('public')->exists($layanan->image)) {
                Storage::disk('public')->delete($layanan->image);
            }

            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('Layanan', $originalName, 'public');
            $validated['image'] = $path;
        }

        $layanan->update($validated);

        return redirect()->route('layanan.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = LayananKami::findOrFail($id);

        // Hapus gambar jika ada
        if ($layanan->image && Storage::disk('public')->exists($layanan->image)) {
            Storage::disk('public')->delete($layanan->image);
        }

        $layanan->delete();
        return redirect()->route('layanan.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
