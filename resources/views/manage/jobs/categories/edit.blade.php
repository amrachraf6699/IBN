<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.categories') }}">
    <form action="{{ route('manage.categories.update' , $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body flex flex-col p-6">
                <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                    <div class="flex-1">
                        <div class="card-title text-slate-900 dark:text-white">
                            {{ __('dashboard.create') }} {{ __('dashboard.categories') }}
                        </div>
                    </div>
                </header>
                <div class="card-text h-full space-y-4">
                    <div class="input-area">
                        <div class="relative">
                            <label for="title_ar" class="form-label">
                                {{ __('dashboard.title') }} ({{ __('dashboard.arabic') }})
                            </label>
                            <input type="text" class="form-control" placeholder="{{ __('dashboard.title') }}" name="title[ar]" id="title_ar" value="{{ old('title.ar' , $category->getTranslation('title', 'ar')) }}" required>
                        </div>
                        @error('title.ar')
                            <span class="text-danger text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-area">
                        <div class="relative">
                            <label for="title_en" class="form-label">
                                {{ __('dashboard.title') }} ({{ __('dashboard.english') }})
                            </label>
                            <input type="text" class="form-control" placeholder="{{ __('dashboard.title') }}" name="title[en]" id="title_en" value="{{ old('title.en' , $category->getTranslation('title', 'en')) }}" required>
                        </div>
                        @error('title.en')
                            <span class="text-danger text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="btn btn-primary">
                            {{ __('dashboard.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-manage.layouts.main>