<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.clients') }}">
    <x-manage.partials.form
        :action="route('manage.clients.store')"
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
            'url' => [
                'label' => __('dashboard.url'),
                'type' => 'text',
                'translatable' => false,
            ],
            'image' => [
                'label' => __('dashboard.image'),
                'type' => 'image',
            ],
        ]"
    />

</x-manage.layouts.main>
