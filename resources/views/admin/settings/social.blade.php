@extends('admin.layouts.app')
@section('title', 'Social Settings')
@section('content')
<div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
  <div class="card xl:col-span-2">
    <div class="card-body flex flex-col p-6">
      <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
        <div class="flex-1">
          <div class="card-title text-slate-900 dark:text-white">
            <iconify-icon class="me-2" icon="mdi:share-variant"></iconify-icon>
            Social Media Settings
          </div>
        </div>
      </header>

      <div class="card-text h-full">
        <form class="space-y-8" method="POST" action="">
          @csrf

          <!-- SOCIAL LINKS GROUP -->
          <div>
            <h5 class="mb-4 text-lg font-semibold text-slate-700 dark:text-white">Social Media Links</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">

              <!-- Facebook -->
              <div class="input-area relative">
                <label for="facebook" class="form-label">
                  <iconify-icon class="me-1" icon="ic:baseline-facebook"></iconify-icon>
                  Facebook URL
                </label>
                <input
                  type="url"
                  class="form-control @error('facebook') is-invalid @enderror"
                  id="facebook"
                  name="facebook"
                  value="{{ old('facebook', $settings['facebook'] ?? '') }}"
                  placeholder="https://facebook.com/yourpage"
                >
                @error('facebook')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Twitter -->
              <div class="input-area relative">
                <label for="twitter" class="form-label">
                  <iconify-icon class="me-1" icon="mdi:twitter"></iconify-icon>
                  Twitter URL
                </label>
                <input
                  type="url"
                  class="form-control @error('twitter') is-invalid @enderror"
                  id="twitter"
                  name="twitter"
                  value="{{ old('twitter', $settings['twitter'] ?? '') }}"
                  placeholder="https://twitter.com/yourusername"
                >
                @error('twitter')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- Instagram -->
              <div class="input-area relative">
                <label for="instagram" class="form-label">
                  <iconify-icon class="me-1" icon="mdi:instagram"></iconify-icon>
                  Instagram URL
                </label>
                <input
                  type="url"
                  class="form-control @error('instagram') is-invalid @enderror"
                  id="instagram"
                  name="instagram"
                  value="{{ old('instagram', $settings['instagram'] ?? '') }}"
                  placeholder="https://instagram.com/yourusername"
                >
                @error('instagram')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- LinkedIn -->
              <div class="input-area relative">
                <label for="linkedin" class="form-label">
                  <iconify-icon class="me-1" icon="mdi:linkedin"></iconify-icon>
                  LinkedIn URL
                </label>
                <input
                  type="url"
                  class="form-control @error('linkedin') is-invalid @enderror"
                  id="linkedin"
                  name="linkedin"
                  value="{{ old('linkedin', $settings['linkedin'] ?? '') }}"
                  placeholder="https://linkedin.com/company/yourcompany"
                >
                @error('linkedin')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- YouTube -->
              <div class="input-area relative">
                <label for="youtube" class="form-label">
                  <iconify-icon class="me-1" icon="mdi:youtube"></iconify-icon>
                  YouTube URL
                </label>
                <input
                  type="url"
                  class="form-control @error('youtube') is-invalid @enderror"
                  id="youtube"
                  name="youtube"
                  value="{{ old('youtube', $settings['youtube'] ?? '') }}"
                  placeholder="https://youtube.com/@yourchannel"
                >
                @error('youtube')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- TikTok -->
              <div class="input-area relative">
                <label for="tiktok" class="form-label">
                  <iconify-icon class="me-1" icon="ic:baseline-tiktok"></iconify-icon>
                  TikTok URL
                </label>
                <input
                  type="url"
                  class="form-control @error('tiktok') is-invalid @enderror"
                  id="tiktok"
                  name="tiktok"
                  value="{{ old('tiktok', $settings['tiktok'] ?? '') }}"
                  placeholder="https://tiktok.com/@yourusername"
                >
                @error('tiktok')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

              <!-- WhatsApp -->
              <div class="input-area relative lg:col-span-1">
                <label for="whatsapp" class="form-label">
                  <iconify-icon class="me-1" icon="ic:baseline-whatsapp"></iconify-icon>
                  WhatsApp Number
                </label>
                <input
                  type="text"
                  class="form-control @error('whatsapp') is-invalid @enderror"
                  id="whatsapp"
                  name="whatsapp"
                  value="{{ old('whatsapp', $settings['whatsapp'] ?? '') }}"
                  placeholder="https://wa.me/1234567890"
                >
                <p class="mt-1 text-slate-500 text-sm">Format: https://wa.me/your-phone-number</p>
                @error('whatsapp')
                  <p class="mt-1 text-red-600 text-sm">{{ $message }}</p>
                @enderror
              </div>

            </div>
          </div>

          <button class="btn inline-flex justify-center btn-dark ml-2 mr-2">
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
@endsection