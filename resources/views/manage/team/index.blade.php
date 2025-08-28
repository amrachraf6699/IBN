<x-manage.layouts.main title="{{ __('dashboard.team') }}">
    <x-manage.partials.table-list
    :title="__('dashboard.team')"
    :add-link="route('manage.team.create')"
    :items="$team"
    :columns="[
        'id' => __('dashboard.id'),
        'image:thumbnail' => __('dashboard.image'),
        'translate:name' => __('dashboard.name'), 
        'translate:job_title' => __('dashboard.job_title'), 
        'created_at' => __('dashboard.created_at'),
        'actions' => __('dashboard.actions'),
    ]"
    :actions-link="URL::route('manage.team.index')"
    :pagination="$team"
    :searchable="true"
    :search-params="['search' => request('search')]"
    :search-placeholder="__('dashboard.search_team')"
    :search-label="__('dashboard.search')"
    :search-value="request('search')"
/>

</x-manage.layouts.main>
