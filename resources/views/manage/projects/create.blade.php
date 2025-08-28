<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.projects') }}">
    <x-manage.partials.form
        :action="route('manage.projects.store')"
        method="POST"
        :model="null"
        :fields="[
            'title' => [
                'label' => __('dashboard.title'),
                'type' => 'text',
                'translatable' => true,
            ],
            'description' => [
                'label' => __('dashboard.description'),
                'type' => 'ckeditor',
                'translatable' => true,
            ],
            'url' => [
                'label' => __('dashboard.url'),
                'type' => 'text',
            ],
            'image' => [
                'label' => __('dashboard.image'),
                'type' => 'image',
            ],
        ]"
    />

</x-manage.layouts.main>
