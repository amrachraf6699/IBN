<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Sliders\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sliders = Slider::when($request->search, function ($query) use ($request) {
            $query->where('title->ar', 'like', '%' . $request->search . '%')
                ->orWhere('title->en', 'like', '%' . $request->search . '%');
        })->latest()->get();
        return view('manage.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manage.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $data = $request->validated();

        $imageTranslations = [];
        foreach (['ar', 'en'] as $locale) {
            if ($request->hasFile("image.$locale")) {
                $imageTranslations[$locale] = uploadFile($request->file("image.$locale"), 'sliders');
            }
        }

        $data['image'] = $imageTranslations;
        $slider = slider::create($data);

        return redirect()->route('manage.sliders.index')->with('success', __('dashboard.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('manage.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSliderRequest $request, string $id)
    {
        $slider = Slider::findOrFail($id);

        $data = $request->validated();

        $imageTranslations = $slider->getTranslations('image');

        foreach (['ar', 'en'] as $locale) {
            if ($request->hasFile("image.$locale")) {
                $imageTranslations[$locale] = uploadFile($request->file("image.$locale"), 'sliders');
            }
        }

        $data['image'] = $imageTranslations;

        $slider->update($data);

        return redirect()
            ->route('manage.sliders.index')
            ->with('success', __('dashboard.updated_successfully'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route('manage.sliders.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
