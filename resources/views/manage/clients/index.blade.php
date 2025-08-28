<x-manage.layouts.main title="{{ __('dashboard.clients') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.clients')"
    :add-link="route('manage.clients.create')"
    :items="$clients"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:title' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.clients.index')"
    :pagination="$clients"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_clients')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
