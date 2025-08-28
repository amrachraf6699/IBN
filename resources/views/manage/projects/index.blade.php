<x-manage.layouts.main title="{{ __('dashboard.projects') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.projects')"
    :add-link="route('manage.projects.create')"
    :items="$projects"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:title' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.projects.index')"
    :pagination="$projects"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_projects')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
