<x-manage.layouts.main title="{{ __('dashboard.categories') }}">
                  <div class="card">
                    <header class="card-header noborder flex items-center justify-between">
                        <h4 class="card-title">
                            {{ __('dashboard.categories') }}
                        </h4>
                        <a href="{{ route('manage.categories.create') }}" class="btn btn-primary">
                            {{ __('dashboard.create') }}
                        </a>
                    </header>
                    <div class="card-body px-6 pb-6">
                      <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                              <thead class=" border-t border-slate-100 dark:border-slate-800">
                                <tr>
                                    <th scope="col" class=" table-th ">#</th>
                                    <th scope="col" class=" table-th ">{{ __('dashboard.title') }}</th>
                                    <th scope="col" class=" table-th ">{{ __('dashboard.jobs_count') }}</th>
                                    <th scope="col" class=" table-th ">{{ __('dashboard.created_at') }}</th>
                                    <th scope="col" class=" table-th ">{{ __('dashboard.actions') }}</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                @forelse ($categories as $category)
                                <tr>
                                  <td class="table-td">{{ $category->id }}</td>
                                  <td class="table-td ">{{ $category->title }}</td>
                                  <td class="table-td ">
                                    <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 {{ $category->jobs_count > 0 ? 'text-success-500 bg-success-500' : 'text-danger-500 bg-danger-500' }}">
                                      {{ $category->jobs_count }}
                                    </div>
                                  </td>
                                  <td class="table-td">
                                    <div>
                                      {{ $category->created_at }} ({{ $category->created_at->diffForHumans() }})
                                    </div>
                                  </td>
                                  <td class="table-td ">
                                    <div>
                                      <div class="relative">
                                        <div class="dropdown relative">
                                          <button class="text-xl text-center block w-full " type="button" id="tableDropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                          </button>
                                          <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700
                                              shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                              <li>
                                                  <a href="{{ route('manage.categories.show', $category) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                      {{ __('dashboard.show') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="{{ route('manage.categories.edit', $category) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                      {{ __('dashboard.edit') }}
                                                  </a>
                                              </li>
                                              <li>
                                                  <button type="button" class="text-slate-600 dark:text-white block w-full text-left font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white"
                                                          onclick="openDeleteModal({{ $category->id }})">
                                                      {{ __('dashboard.delete') }}
                                                  </button>
                                              </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <div id="deleteModal-{{ $category->id }}" class="fixed inset-0 z-100 hidden items-center justify-center" style="background-color: rgba(0, 0, 0, 0.5);">
                                  <div class="bg-white dark:bg-slate-800 rounded-lg shadow-lg p-6 w-full max-w-md">
                                      <h2 class="text-lg font-semibold text-slate-800 dark:text-white mb-4">{{ __('dashboard.confirm_delete') }}</h2>
                                      <p class="text-sm text-slate-600 dark:text-slate-300">
                                          {{ __('dashboard.delete_category_confirmation', ['category' => $category->title]) }}
                                      </p>
                                      <p class="text-sm text-danger-500 dark:text-red-400 mb-6">
                                          {{ __('dashboard.delete_category_warning') }}
                                      </p>
                                      <div class="flex justify-end space-x-3">
                                          <button type="button" class="px-4 py-2 bg-gray-200 dark:bg-slate-600 text-slate-800 dark:text-white rounded hover:bg-gray-300 dark:hover:bg-slate-500"
                                                  onclick="closeDeleteModal({{ $category->id }})">
                                              {{ __('dashboard.cancel') }}
                                          </button>
                                          <form method="POST" action="{{ route('manage.categories.destroy', $category) }}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class=" mr-2 ml-2 px-4 py-2 bg-danger-600 text-white rounded hover:bg-red-700">
                                                  {{ __('dashboard.confirm') }}
                                              </button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                                @empty
                                @endforelse
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</x-manage.layouts.main>
<script>
    function openDeleteModal(id) {
        const modal = document.getElementById(`deleteModal-${id}`);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    function closeDeleteModal(id) {
        const modal = document.getElementById(`deleteModal-${id}`);
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
    }
</script>
