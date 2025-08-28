<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.services') }}">
    <x-manage.partials.form
        :action="route('manage.services.store')"
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
                'type' => 'textarea',
                'translatable' => true,
            ],
            'content' => [
                'label' => __('dashboard.content'),
                'type' => 'ckeditor',
                'translatable' => true,
            ],
            'image' => [
                'label' => __('dashboard.image'),
                'type' => 'image',
            ],
            'icon' => [
                'label' => __('dashboard.icon'),
                'type' => 'image',
            ],
        ]"
    />

</x-manage.layouts.main>
