<x-manage.layouts.main title="{{ __('dashboard.services') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.services')"
    :add-link="route('manage.services.create')"
    :items="$services"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:title' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.services.index')"
    :pagination="$services"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_services')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
