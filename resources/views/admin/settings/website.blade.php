@extends('admin.layouts.app')
@section('title', 'Website Settings')
@section('content')
<div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
  <div class="card xl:col-span-2">
    <div class="card-body flex flex-col p-6">
      <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
        <div class="flex-1">
          <div class="card-title text-slate-900 dark:text-white">
            <iconify-icon class="me-2" icon="heroicons-outline:globe-alt"></iconify-icon>
            Website Settings
          </div>
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

      <div class="card-text h-full">
        <form class="space-y-8" method="POST" action="" enctype="multipart/form-data">
          @csrf

          <!-- BASIC INFORMATION GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Basic Information</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

              <!-- Site Name -->
              <div class="input-area relative">
                <label for="site_name" class="form-label">
                  <iconify-icon class="me-1" icon="heroicons-outline:home"></iconify-icon>
                  Site Name
                </label>
                <input
                  type="text"
                  class="form-control @error('site_name') is-invalid @enderror"
                  id="site_name"
                  name="site_name"
                  value="{{ old('site_name', $settings['site_name'] ?? '') }}"
                  placeholder="Your Website Name"
                >
                @error('site_name')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Site Keywords -->
              <div class="input-area relative">
                <label for="site_keywords" class="form-label">
                  <iconify-icon class="me-1" icon="heroicons-outline:tag"></iconify-icon>
                  Keywords
                </label>
                <input
                  type="text"
                  class="form-control @error('site_keywords') is-invalid @enderror"
                  id="site_keywords"
                  name="site_keywords"
                  value="{{ old('site_keywords', $settings['site_keywords'] ?? '') }}"
                  placeholder="keyword1, keyword2, keyword3"
                >
                <p class="mt-1 text-slate-500 text-sm">Separate keywords with commas</p>
                @error('site_keywords')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Site Description -->
              <div class="input-area relative md:col-span-2">
                <label for="site_description" class="form-label">
                  <iconify-icon class="me-1" icon="heroicons-outline:document-text"></iconify-icon>
                  Site Description
                </label>
                <textarea
                  class="form-control @error('site_description') is-invalid @enderror"
                  id="site_description"
                  name="site_description"
                  rows="3"
                  placeholder="Brief description of your website..."
                >{{ old('site_description', $settings['site_description'] ?? '') }}</textarea>
                @error('site_description')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

            </div>
          </div>

          <!-- BRANDING GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Branding</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

              <!-- Site Logo -->
              <div class="input-area relative">
                <label for="site_logo" class="form-label">
                  <iconify-icon class="me-1" icon="heroicons-outline:photo"></iconify-icon>
                  Site Logo
                </label>
                <input
                  type="file"
                  class="form-control @error('site_logo') is-invalid @enderror"
                  id="site_logo"
                  name="site_logo"
                  accept="image/*"
                >
                @if($settings['site_logo'] ?? false)
                  <p class="mt-1 text-slate-500 text-sm">
                    <img class="h-8" src="{{ asset('storage/' . $settings['site_logo']) }}" >
                  </p>
                @endif
                @error('site_logo')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Site Favicon -->
              <div class="input-area relative">
                <label for="site_favicon" class="form-label">
                  <iconify-icon class="me-1" icon="heroicons-outline:star"></iconify-icon>
                  Site Favicon
                </label>
                <input
                  type="file"
                  class="form-control @error('site_favicon') is-invalid @enderror"
                  id="site_favicon"
                  name="site_favicon"
                  accept=".ico,.png,.jpg,.jpeg,.gif,.svg"
                >
                @if($settings['site_favicon'] ?? false)
                  <p class="mt-1 text-slate-500 text-sm">
                    <img class="h-8" src="{{ asset('storage/' . $settings['site_favicon']) }}" >
                  </p>
                @endif
                <p class="mt-1 text-slate-500 text-sm">Recommended: 32x32px ICO or PNG file</p>
                @error('site_favicon')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

            </div>
          </div>

          <!-- PREVIEW GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Preview</h5>
            <div class="bg-slate-50 dark:bg-slate-800 p-4 rounded-lg">
              <div class="flex items-center mb-3">
                @if($settings['site_logo'] ?? false)
                  <img src="{{ asset('storage/' . $settings['site_logo']) }}" alt="Logo" class="h-8 w-auto me-3 mr-2">
                @endif
                <h6 class="text-slate-900 dark:text-white mb-0" id="preview-name">
                  {{ $settings['site_name'] ?? 'Your Website Name' }}
                </h6>
              </div>
              <p class="text-slate-600 dark:text-slate-400 text-sm mb-2" id="preview-description">
                {{ $settings['site_description'] ?? 'Your website description will appear here...' }}
              </p>
              <p class="text-slate-500 text-xs" id="preview-keywords">
                Keywords: {{ $settings['site_keywords'] ?? 'your, keywords, here' }}
              </p>
            </div>
          </div>

          <button class="btn inline-flex justify-center btn-dark">
            Save Settings
          </button>
          <a href="{{ url()->previous() }}" class="btn inline-flex justify-center btn-secondary">
            Back
          </a>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
// Live preview updates
document.addEventListener('DOMContentLoaded', function() {
    const siteName = document.getElementById('site_name');
    const siteDescription = document.getElementById('site_description');
    const siteKeywords = document.getElementById('site_keywords');
    
    const previewName = document.getElementById('preview-name');
    const previewDescription = document.getElementById('preview-description');
    const previewKeywords = document.getElementById('preview-keywords');
    
    siteName.addEventListener('input', function() {
        previewName.textContent = this.value || 'Your Website Name';
    });
    
    siteDescription.addEventListener('input', function() {
        previewDescription.textContent = this.value || 'Your website description will appear here...';
    });
    
    siteKeywords.addEventListener('input', function() {
        previewKeywords.textContent = 'Keywords: ' + (this.value || 'your, keywords, here');
    });
});
</script>
@endsection