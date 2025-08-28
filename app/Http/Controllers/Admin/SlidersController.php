<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Sliders\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sliders = Slider::query()
            ->when($request->has('search'), function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('subtitle', 'like', '%' . $request->search . '%')
                    ->orWhere('button_text', 'like', '%' . $request->search . '%')
                    ->orWhere('button_link', 'like', '%' . $request->search . '%');
            })
            ->when($request->has('is_active'), function ($query) use ($request) {
                $query->where('is_active', $request->is_active);
            })
            ->when($request->has('has_link'), function ($query) use ($request) {
                $query->whereNotNull('button_link');
            })
            ->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sliders', 'public');
            $data['image'] = $imagePath;
        }

        $data['is_active'] = $request->has('is_active');

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(StoreSliderRequest $request, string $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sliders', 'public');
            $data['image'] = $imagePath;
        } else {
            $data['image'] = $slider->image;
        }

        $data['is_active'] = $request->has('is_active');

        $slider->update($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->image) {
            \Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider deleted successfully.');
    }

    public function toggle(Slider $slider)
    {
        $slider->is_active = !$slider->is_active;
        $slider->save();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider status updated successfully.');
    }
}
