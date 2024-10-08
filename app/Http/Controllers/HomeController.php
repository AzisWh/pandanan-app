<?php

namespace App\Http\Controllers;

use App\Models\HomeWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeWelcomes = HomeWelcome::all();
        $itemCount = $homeWelcomes->count();
        return view('admin.homepage.index',compact('homeWelcomes','itemCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'imgtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('HomePage', $originalName, 'public');
            $validated['image'] = $path;
        }

        HomeWelcome::create($validated);

        return redirect()->route('home.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $homeWelcome = HomeWelcome::findOrFail($id);
        return view('admin.homepage.update', compact('homeWelcome'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $homeWelcome = HomeWelcome::findOrFail($id);
        return view('admin.homepage.update', compact('homeWelcome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $homeWelcome = HomeWelcome::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'imgtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            //Hapus gambar lama jika ada
            if ($homeWelcome->image && Storage::disk('public')->exists($homeWelcome->image)) {
                Storage::disk('public')->delete($homeWelcome->image);
            }

            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('HomePage', $originalName, 'public');
            $validated['image'] = $path;
        }

        $homeWelcome->update($validated);

        return redirect()->route('home.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $homeWelcome = HomeWelcome::findOrFail($id);

        // Hapus gambar jika ada
        if ($homeWelcome->image && Storage::disk('public')->exists($homeWelcome->image)) {
            Storage::disk('public')->delete($homeWelcome->image);
        }

        $homeWelcome->delete();
        return redirect()->route('home.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
