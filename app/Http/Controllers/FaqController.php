<?php

namespace App\Http\Controllers;

use App\Models\frequentlyasked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Frequentlyasked::all();
        return view('admin.faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'accordionname' => 'required|string|max:255',
        ]);


        Frequentlyasked::create($validated);

        return redirect()->route('faq.index')->with('success', 'Home Welcome section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faq = Frequentlyasked::findOrFail($id);
        return view('admin.faq.update', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Frequentlyasked::findOrFail($id);
        return view('admin.faq.update', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faq = Frequentlyasked::findOrFail($id);

        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'accordionname' => 'required|string|max:255',
        ]);

        $faq->update($validated);

        return redirect()->route('faq.index')->with('success', 'Home Welcome section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = frequentlyasked::findOrFail($id);

        $faq->delete();
        return redirect()->route('faq.index')->with('success', 'Home Welcome section deleted successfully.');
    }
}
