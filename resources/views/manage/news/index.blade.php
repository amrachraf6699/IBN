<x-manage.layouts.main title="{{ __('dashboard.news') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.news')"
    :add-link="route('manage.news.create')"
    :items="$news"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:title' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.news.index')"
    :pagination="$news"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_news')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
