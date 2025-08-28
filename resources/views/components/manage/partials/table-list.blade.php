<div class="card">
<div class="card-body px-6 pb-6inline-block min-w-full align-middle">
    <div class="overflow-hidden">
        <div id="data-table_wrapper" class="dataTables_wrapper no-footer">
            <!-- Table Section -->
            <div class="min-w-full">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 dataTable no-footer" id="data-table">
                    <thead class="border-t border-slate-100 dark:border-slate-800">
                        <tr>
                            @foreach($columns as $key => $label)
                                <th class="table-th sorting" style="width: {{ $loop->index == 0 ? '28.5312px' : '' }}">
                                    {{ $label }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                        @forelse($items as $item)
                            <tr class="even">
                                @foreach($columns as $key => $label)
                                    <td class="table-td">
                                        @if(str_starts_with($key, 'id'))
                                            <span>{{ $item->id }}</span>
                                        @elseif(str_starts_with($key, 'image:'))
                                            @php $imageField = str_replace('image:', '', $key); @endphp
                                            <img src="{{ $item->$imageField }}" alt="" class="w-7 h-7 rounded-full object-cover">
                                        @elseif(str_starts_with($key, 'translate:'))
                                            @php
                                                $translationField = str_replace('translate:', '', $key);
                                            @endphp
                                            <span>{{ $item->getTranslation($translationField, app()->getLocale()) }}</span>
                                        @elseif($key === 'created_at')
                                            <span>{{ $item->created_at->format('Y-m-d H:i') }}</span>
                                        @elseif($key === 'actions')
                                                <div class="relative">
                                                    <!-- Dropdown Button -->
                                                    <div class="dropdown relative">
                                                        <button class="text-xl text-center block w-full" type="button" id="tableDropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <iconify-icon icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                        </button>

                                                        <!-- Dropdown Menu -->
                                                        <ul class="dropdown-menu min-w-[120px] absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                            <!-- Edit Option -->
                                                            @if(request()->routeIs('manage.contact.index'))
                                                                <li>
                                                                    <a href="{{ route('manage.contact.show' , $item) }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                                        {{ __('dashboard.show') }}
                                                                    </a>
                                                                </li>
                                                                @else
                                                                <li>
                                                                    <a href="{{ $actionsLink . '/' . $item->id . '/edit' }}" class="text-slate-600 dark:text-white block font-Inter font-normal px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                                        {{ __('dashboard.edit') }}
                                                                    </a>
                                                                </li>

                                                                <!-- Delete Option -->
                                                                <li>
                                                                    <button type="button" class="w-full text-left text-slate-600 dark:text-white px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white" onclick="showDeleteModal({{ $item->id }})">
                                                                        {{ __('dashboard.delete') }}
                                                                    </button>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                            </div>
                                        @else
                                            <span>{{ $item->$key }}</span>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal for Delete Confirmation --}}
<div id="deleteModal" class="modal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('dashboard.delete_confirmation') }}</h5>
                <button type="button" class="btn-close" onclick="closeDeleteModal()"></button>
            </div>
            <div class="modal-body">
                {{ __('dashboard.are_you_sure_delete') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeDeleteModal()">{{ __('dashboard.cancel') }}</button>
                <form action="" id="deleteForm" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mr-2 ml-2">{{ __('dashboard.delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function showDeleteModal(itemId) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        
        form.action = '{{ $actionsLink }}/' + itemId;

        modal.style.display = 'flex';
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.style.display = 'none'; 
    }

    window.onclick = function(event) {
        const modal = document.getElementById('deleteModal');
        if (event.target === modal) {
            modal.style.display = 'none'; 
        }
    };
</script>
<style>
    .modal {
        position: fixed;
        z-index: 1000;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
        display: none; 
        align-items: center;
        justify-content: center;
    }

    .modal-dialog {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        width: 400px;
        max-width: 100%;
    }

    .modal-header {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .modal-body {
        margin-bottom: 20px;
    }

    .modal-footer {
        display: flex;
        justify-content: flex-end;
    }

    .btn-close {
        border: none;
        background: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }
</style>
