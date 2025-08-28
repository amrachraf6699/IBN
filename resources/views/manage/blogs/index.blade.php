<x-manage.layouts.main title="{{ __('dashboard.blogs') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.blogs')"
    :add-link="route('manage.blogs.create')"
    :items="$blogs"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:title' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.blogs.index')"
    :pagination="$blogs"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_blogs')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
