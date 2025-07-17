<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::latest()->get();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description_tr' => 'required|string',
            'description_en' => 'nullable|string',
            'cv_tr' => 'nullable|file|mimes:pdf|max:2048',
            'cv_en' => 'nullable|file|mimes:pdf|max:2048',
            'cover_letter_tr' => 'nullable|file|mimes:pdf|max:2048',
            'cover_letter_en' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $data = $request->only(['title', 'description_tr', 'description_en']);
        
        // Dosya yüklemeleri
        if ($request->hasFile('cv_tr')) {
            $data['cv_tr_url'] = $request->file('cv_tr')->store('documents', 'public');
        }
        
        if ($request->hasFile('cv_en')) {
            $data['cv_en_url'] = $request->file('cv_en')->store('documents', 'public');
        }
        
        if ($request->hasFile('cover_letter_tr')) {
            $data['cover_letter_tr_url'] = $request->file('cover_letter_tr')->store('documents', 'public');
        }
        
        if ($request->hasFile('cover_letter_en')) {
            $data['cover_letter_en_url'] = $request->file('cover_letter_en')->store('documents', 'public');
        }

        $data['is_active'] = $request->has('is_active');

        About::create($data);

        return redirect()->route('about.index')->with('success', 'About bilgisi başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description_tr' => 'required|string',
            'description_en' => 'nullable|string',
            'cv_tr' => 'nullable|file|mimes:pdf|max:2048',
            'cv_en' => 'nullable|file|mimes:pdf|max:2048',
            'cover_letter_tr' => 'nullable|file|mimes:pdf|max:2048',
            'cover_letter_en' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $data = $request->only(['title', 'description_tr', 'description_en']);
        
        // Dosya yüklemeleri
        if ($request->hasFile('cv_tr')) {
            // Eski dosyayı sil
            if ($about->cv_tr_url) {
                Storage::disk('public')->delete($about->cv_tr_url);
            }
            $data['cv_tr_url'] = $request->file('cv_tr')->store('documents', 'public');
        }
        
        if ($request->hasFile('cv_en')) {
            if ($about->cv_en_url) {
                Storage::disk('public')->delete($about->cv_en_url);
            }
            $data['cv_en_url'] = $request->file('cv_en')->store('documents', 'public');
        }
        
        if ($request->hasFile('cover_letter_tr')) {
            if ($about->cover_letter_tr_url) {
                Storage::disk('public')->delete($about->cover_letter_tr_url);
            }
            $data['cover_letter_tr_url'] = $request->file('cover_letter_tr')->store('documents', 'public');
        }
        
        if ($request->hasFile('cover_letter_en')) {
            if ($about->cover_letter_en_url) {
                Storage::disk('public')->delete($about->cover_letter_en_url);
            }
            $data['cover_letter_en_url'] = $request->file('cover_letter_en')->store('documents', 'public');
        }

        $data['is_active'] = $request->has('is_active');

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'About bilgisi başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        // Dosyaları sil
        if ($about->cv_tr_url) {
            Storage::disk('public')->delete($about->cv_tr_url);
        }
        if ($about->cv_en_url) {
            Storage::disk('public')->delete($about->cv_en_url);
        }
        if ($about->cover_letter_tr_url) {
            Storage::disk('public')->delete($about->cover_letter_tr_url);
        }
        if ($about->cover_letter_en_url) {
            Storage::disk('public')->delete($about->cover_letter_en_url);
        }

        $about->delete();

        return redirect()->route('about.index')->with('success', 'About bilgisi başarıyla silindi.');
    }
}
