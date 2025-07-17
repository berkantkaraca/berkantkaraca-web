<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::ordered()->get();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'technology' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'security_features' => 'nullable|string',
            'microservices' => 'nullable|string',
            'technologies_used' => 'nullable|string',
            'github_url' => 'nullable|url',
            'demo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        Portfolio::create($request->all());

        return redirect()->route('admin.portfolios.index')
                        ->with('success', 'Portfolio başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'technology' => 'required|string|max:255',
            'description' => 'required|string',
            'features' => 'nullable|string',
            'security_features' => 'nullable|string',
            'microservices' => 'nullable|string',
            'technologies_used' => 'nullable|string',
            'github_url' => 'nullable|url',
            'demo_url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean'
        ]);

        $portfolio->update($request->all());

        return redirect()->route('admin.portfolios.index')
                        ->with('success', 'Portfolio başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')
                        ->with('success', 'Portfolio başarıyla silindi.');
    }
}
