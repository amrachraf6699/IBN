<x-manage.layouts.main title="{{ __('dashboard.contact') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.contact')"
    :add-link="route('manage.contact.create')"
    :items="$contacts"
    :columns="[
        'id' => __('dashboard.id'),
        'name' => __('dashboard.name'), 
        'email' => __('dashboard.email'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.contact.index')"
    :pagination="$contacts"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_contact')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
