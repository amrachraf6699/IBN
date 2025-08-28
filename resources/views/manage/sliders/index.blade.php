<x-manage.layouts.main title="{{ __('dashboard.sliders') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.sliders')"
    :add-link="route('manage.sliders.create')"
    :items="$sliders"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'button_text' => __('dashboard.title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.sliders.index')"
    :pagination="$sliders"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_sliders')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
