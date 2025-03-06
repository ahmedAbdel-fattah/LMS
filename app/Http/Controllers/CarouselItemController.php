<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselItem;
use Intervention\Image\Facades\Image;

class CarouselItemController extends Controller
{
    public function index()
    {
        $carouselItems = CarouselItem::paginate(10);
        return view('admin.dashboard.carousel.index', compact('carouselItems'));
    }

    public function show($id)
    {
        $carouselItem = CarouselItem::findOrFail($id);
        return view('admin.dashboard.carousel.show', compact('carouselItem'));
    }

    public function create()
    {
        return view('admin.dashboard.carousel.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
            'button1_text' => 'nullable|string|max:255',
            'button1_link' => 'nullable',
            'button2_text' => 'nullable|string|max:255',
            'button2_link' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $imagePath = public_path('images/carousel/' . $imageName);
            Image::make($image)->resize(1920, 1027)->save($imagePath);
            $validatedData['image'] = $imageName;
        }

        CarouselItem::create($validatedData);

        return redirect()->route('carousel.index')->with('success', 'Item saved successfully.');
    }

    public function edit($id)
    {
        $carouselItem = CarouselItem::findOrFail($id);
        return view('admin.dashboard.carousel.edit', compact('carouselItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:10240',
            'button1_text' => 'nullable|string|max:255',
            'button1_link' => 'nullable',
            'button2_text' => 'nullable|string|max:255',
            'button2_link' => 'nullable',
        ]);

        $carouselItem = CarouselItem::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($carouselItem->image && file_exists(public_path('images/carousel/' . $carouselItem->image))) {
                unlink(public_path('images/carousel/' . $carouselItem->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $imagePath = public_path('images/carousel/' . $imageName);
            Image::make($image)->resize(1920, 1027)->save($imagePath);
            $carouselItem->image = $imageName;
        }

        $carouselItem->update($request->only([
            'title', 'description', 'button1_text', 'button1_link',
            'button2_text', 'button2_link'
        ]));

        return redirect()->route('carousel.index')->with('success', 'Carousel item updated successfully.');
    }

    public function destroy($id)
    {
        $carouselItem = CarouselItem::findOrFail($id);

        if ($carouselItem->image && file_exists(public_path('images/carousel/' . $carouselItem->image))) {
            unlink(public_path('images/carousel/' . $carouselItem->image));
        }

        $carouselItem->delete();

        return redirect()->route('carousel.index')->with('success', 'Carousel item deleted successfully.');
    }
}