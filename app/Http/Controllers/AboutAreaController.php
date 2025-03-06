<?php

namespace App\Http\Controllers;

use App\Models\AboutArea;
use Illuminate\Http\Request;

class AboutAreaController extends Controller
{
    public function index()
    {
        $aboutAreas = AboutArea::all();
        return view('admin.dashboard.about.index', compact('aboutAreas'));
    }

    public function create()
    {
        return view('admin.dashboard.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'icon_1' => 'nullable|string',
            'icon_2' => 'nullable|string',
            'icon_3' => 'nullable|string',
            'btn_text' => 'required',
            'btn_link' => 'required|url',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_1')) {
            $data['image_1'] = $request->file('image_1')->store('about', 'public');
        }

        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('about', 'public');
        }

        AboutArea::create($data);
        return redirect()->route('about.index')->with('success', 'About section added successfully!');
    }

    public function edit(AboutArea $about)
    {
        return view('admin.dashboard.about.edit', compact('about'));
    }

    public function update(Request $request, AboutArea $about)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'icon_1' => 'nullable|string',
            'icon_2' => 'nullable|string',
            'icon_3' => 'nullable|string',
            'btn_text' => 'required',
            'btn_link' => 'required|url',
            'image_1' => 'nullable|image|mimes:jpg,jpeg,png',
            'image_2' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_1')) {
            $data['image_1'] = $request->file('image_1')->store('about', 'public');
        }

        if ($request->hasFile('image_2')) {
            $data['image_2'] = $request->file('image_2')->store('about', 'public');
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success', 'About section updated successfully!');
    }

    public function destroy(AboutArea $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About section deleted successfully!');
    }
}
