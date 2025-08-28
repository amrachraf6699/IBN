@extends('admin.layouts.app')
@section('title', 'Edit Slider')
@section('content')
<div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
  <div class="card xl:col-span-2">
    <div class="card-body flex flex-col p-6">
      <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
        <div class="flex-1">
          <div class="card-title text-slate-900 dark:text-white">Edit Slider</div>
        </div>
      </header>

      {{-- Error Summary Card --}}
      @if ($errors->any())
        <div style="background-color: #f8d7da; color: #842029; padding: 1rem; border-radius: 0.375rem; margin-bottom: 1rem; border: 1px solid #f5c2c7;">
          <strong>There were some problems with your input:</strong>
          <ul class="mt-2 list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="card-text h-full ">
        <form class="space-y-8" enctype="multipart/form-data" method="POST" action="{{ route('admin.sliders.update', $slider->id) }}">
          @csrf
          @method('PUT')

          <!-- TEXT GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Texts</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

              <!-- Title -->
              <div class="input-area relative">
                <label for="title" class="form-label">Title</label>
                <input
                  type="text"
                  class="form-control @error('title') is-invalid @enderror"
                  id="title"
                  name="title"
                  value="{{ old('title', $slider->title) }}"
                  placeholder="Slider Title"
                >
                @error('title')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Subtitle -->
              <div class="input-area relative">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input
                  type="text"
                  class="form-control @error('subtitle') is-invalid @enderror"
                  id="subtitle"
                  name="subtitle"
                  value="{{ old('subtitle', $slider->subtitle) }}"
                  placeholder="Slider Subtitle"
                >
                @error('subtitle')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Image -->
              <div class="input-area relative">
                <label for="image" class="form-label">Image</label>
                @if($slider->image)
                  <img src="{{ $slider->image_url }}" alt="Current Image" class="w-20 h-20 object-cover rounded mb-2">
                @endif
                <input
                  type="file"
                  class="form-control @error('image') is-invalid @enderror"
                  id="image"
                  name="image"
                  accept="image/*"
                >
                @error('image')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Text Horizontally -->
              <div class="input-area">
                <label for="text_horizontally" class="form-label">Text Horizontally</label>
                <select
                  id="text_horizontally"
                  name="text_horizontally"
                  class="form-control @error('text_horizontally') is-invalid @enderror"
                >
                  <option value="left" {{ old('text_horizontally', $slider->text_horizontally) == 'left' ? 'selected' : '' }}>Left</option>
                  <option value="center" {{ old('text_horizontally', $slider->text_horizontally) == 'center' ? 'selected' : '' }}>Center</option>
                  <option value="right" {{ old('text_horizontally', $slider->text_horizontally) == 'right' ? 'selected' : '' }}>Right</option>
                </select>
                @error('text_horizontally')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Text Vertically -->
              <div class="input-area">
                <label for="text_vertically" class="form-label">Text Vertically</label>
                <select
                  id="text_vertically"
                  name="text_vertically"
                  class="form-control @error('text_vertically') is-invalid @enderror"
                >
                  <option value="top" {{ old('text_vertically', $slider->text_vertically) == 'top' ? 'selected' : '' }}>Top</option>
                  <option value="center" {{ old('text_vertically', $slider->text_vertically) == 'center' ? 'selected' : '' }}>Center</option>
                  <option value="bottom" {{ old('text_vertically', $slider->text_vertically) == 'bottom' ? 'selected' : '' }}>Bottom</option>
                </select>
                @error('text_vertically')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Text Color -->
              <div class="input-area relative">
                <label for="text_color" class="form-label">Text Color</label>
                <input
                  type="color"
                  class="form-control p-0 h-10 w-16 @error('text_color') is-invalid @enderror"
                  id="text_color"
                  name="text_color"
                  value="{{ old('text_color', $slider->text_color ?? '#000000') }}"
                >
                @error('text_color')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>

          <!-- BUTTON & CTA GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Button & CTA</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

              <!-- Button Text -->
              <div class="input-area relative">
                <label for="button_text" class="form-label">Button Text</label>
                <input
                  type="text"
                  class="form-control @error('button_text') is-invalid @enderror"
                  id="button_text"
                  name="button_text"
                  value="{{ old('button_text', $slider->button_text) }}"
                  placeholder="Button Text"
                >
                @error('button_text')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Button Link -->
              <div class="input-area relative">
                <label for="button_link" class="form-label">Button Link</label>
                <input
                  type="text"
                  class="form-control @error('button_link') is-invalid @enderror"
                  id="button_link"
                  name="button_link"
                  value="{{ old('button_link', $slider->button_link) }}"
                  placeholder="https://example.com"
                >
                @error('button_link')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Button Horizontally -->
              <div class="input-area">
                <label for="button_horizontally" class="form-label">Button Horizontally</label>
                <select
                  id="button_horizontally"
                  name="button_horizontally"
                  class="form-control @error('button_horizontally') is-invalid @enderror"
                >
                  <option value="left" {{ old('button_horizontally', $slider->button_horizontally) == 'left' ? 'selected' : '' }}>Left</option>
                  <option value="center" {{ old('button_horizontally', $slider->button_horizontally) == 'center' ? 'selected' : '' }}>Center</option>
                  <option value="right" {{ old('button_horizontally', $slider->button_horizontally) == 'right' ? 'selected' : '' }}>Right</option>
                </select>
                @error('button_horizontally')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Button Vertically -->
              <div class="input-area">
                <label for="button_vertically" class="form-label">Button Vertically</label>
                <select
                  id="button_vertically"
                  name="button_vertically"
                  class="form-control @error('button_vertically') is-invalid @enderror"
                >
                  <option value="top" {{ old('button_vertically', $slider->button_vertically) == 'top' ? 'selected' : '' }}>Top</option>
                  <option value="center" {{ old('button_vertically', $slider->button_vertically) == 'center' ? 'selected' : '' }}>Center</option>
                  <option value="bottom" {{ old('button_vertically', $slider->button_vertically) == 'bottom' ? 'selected' : '' }}>Bottom</option>
                </select>
                @error('button_vertically')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Button Color -->
              <div class="input-area relative">
                <label for="button_color" class="form-label">Button Color</label>
                <input
                  type="color"
                  class="form-control p-0 h-10 w-16 @error('button_color') is-invalid @enderror"
                  id="button_color"
                  name="button_color"
                  value="{{ old('button_color', $slider->button_color ?? '#FF0000') }}"
                >
                @error('button_color')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>

          <!-- ACTIVE GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Activation</h5>
            <div>
              <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" class="form-checkbox" name="is_active" {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative
                            transition-all duration-150 bg-slate-100 dark:bg-slate-900"></span>
                <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Active</span>
              </label>
            </div>
          </div>

          <button class="btn inline-flex justify-center btn-dark">Update</button>
          <a href="{{ route('admin.sliders.index') }}" class="btn inline-flex justify-center btn-secondary">Back</a>  
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
