<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.sliders') }}">
    <x-manage.partials.form
        :action="route('manage.sliders.store')"
        method="POST"
        :model="null"
        :fields="[
            'image' => [
                'label' => __('dashboard.image'),
                'type' => 'image',
                'translatable' => true,
            ],
            'button_text' => [
                'label' => __('dashboard.button_text'),
                'type' => 'text',
                'translatable' => true,
            ],
            'link' => [
                'label' => __('dashboard.link'),
                'type' => 'text',
                'translatable' => false,
            ],
        ]"
    />

</x-manage.layouts.main>
