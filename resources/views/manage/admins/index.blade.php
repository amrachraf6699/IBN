<x-manage.layouts.main title="{{ __('dashboard.admins') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.admins')"
    :add-link="route('manage.admins.create')"
    :items="$admins"
    :columns="[
        'id' => __('dashboard.id'),
        'name' => __('dashboard.name'),
        'email' => __('dashboard.email'),
        'role_name' => __('dashboard.role'),
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.admins.index')"
    :pagination="$admins"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_admins')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>
</x-manage.layouts.main>
