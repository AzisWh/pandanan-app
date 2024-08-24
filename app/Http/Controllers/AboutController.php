<?php

namespace App\Http\Controllers;

use App\Models\HeroAbout;
use App\Models\visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = HeroAbout::all();
        $visimisi = visimisi::all();
        return view('landing.about',compact('about','visimisi'));
    }
    public function admin()
    {
        $about = HeroAbout::all();
        $itemCount = $about->count();
        return view('admin.aboutus.index',compact('about','itemCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.aboutus.create');
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
            $path = $request->file('image')->storeAs('AboutUs', $originalName, 'public');
            $validated['image'] = $path;
        }

        HeroAbout::create($validated);

        return redirect()->route('aboutus.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $about = HeroAbout::findOrFail($id);
        return view('admin.aboutus.update', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = HeroAbout::findOrFail($id);
        return view('admin.aboutus.update', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = HeroAbout::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'imgtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')) {
            //Hapus gambar lama jika ada
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }

            $originalName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('AboutUs', $originalName, 'public');
            $validated['image'] = $path;
        }

        $about->update($validated);

        return redirect()->route('aboutus.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = HeroAbout::findOrFail($id);

        // Hapus gambar jika ada
        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();
        return redirect()->route('aboutus.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
