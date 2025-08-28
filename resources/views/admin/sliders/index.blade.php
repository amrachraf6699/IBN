@extends('admin.layouts.app')
@section('title' , 'Sliders')
@section('content')
<div class="space-y-5">
  <div class="card">
    <header class="card-header noborder flex items-center justify-between">
      <h4 class="card-title">
          Sliders
      </h4>
      <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">
          Create
      </a>
    </header>
    <div class="card-body px-6 pb-6">
      <div class="overflow-x-auto -mx-6 dashcode-data-table">
        <div class="inline-block min-w-full align-middle">
          <div class="overflow-hidden ">
            @if($sliders->count() > 0)
            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
              <thead class="border-t border-slate-100 dark:border-slate-800">
                <tr>
                  <th scope="col" class="table-th">Id</th>
                  <th scope="col" class="table-th"></th>
                  <th scope="col" class="table-th">Title</th>
                  <th scope="col" class="table-th">Subtitle</th>
                  <th scope="col" class="table-th">Button Text</th>
                  <th scope="col" class="table-th">Button Link</th>
                  <th scope="col" class="table-th">Status</th>
                  <th scope="col" class="table-th">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                @foreach ($sliders as $slider)
                <tr>
                  <td class="table-td">{{ $slider->id }}</td>
                  <td class="table-td">
                    <img src="{{ $slider->image_url }}" alt="{{ $slider->title }}" class="w-10 h-10 object-cover rounded">
                  </td>
                  <td class="table-td">
                    <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{ $slider->title }}</span>
                  </td>
                  <td class="table-td">{{ Str::limit($slider->subtitle, 50) }}</td>
                  <td class="table-td">
                    @if($slider->button_text)
                    <span class="text-sm text-slate-600 dark:text-slate-300">{{ $slider->button_text }}</span>
                    @else
                    <span class="bg-danger-500 text-white px-2 py-1 rounded">No Text</span>
                    @endif
                  <td class="table-td">
                    @if($slider->button_link)
                    <a href="{{ $slider->button_link }}" target="_blank" class="text-blue-600 underline break-all">
                      {{ $slider->button_link }}
                    </a>
                    @else
                    <span class="bg-danger-500 text-white px-2 py-1 rounded">No Link</span>
                    @endif
                  </td>
                  <td class="table-td">
                    @if($slider->is_active)
                      <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500">
                        Active
                      </div>
                    @else
                      <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-danger-500 bg-danger-500">
                        Inactive
                      </div>
                    @endif
                  </td>
                  <td class="table-td">
                    <div class="relative">
                      <div class="dropdown relative">
                        <button class="text-xl text-center block w-full" type="button" id="tableDropdownMenuButton{{ $slider->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                          <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                          shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                          <li>
                            <a href="{{ route('admin.sliders.toggle', $slider->id) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                {{ $slider->is_active ? 'Disable' : 'Activate' }}
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                              Edit
                            </a>
                          </li>
                          <li>
                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slider?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="w-full text-left text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                Delete
                              </button>
                            </form>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
            <div class="text-center py-6">
              <p class="text-slate-500 dark:text-slate-400">No sliders found.</p>
              <div class="mt-4">
                <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary mt-4">
                  Create Slider
                  <iconify-icon icon="heroicons-outline:plus-circle" class="ml-2"></iconify-icon>
                </a>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
