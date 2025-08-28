<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.blogs') }}">
    <x-manage.partials.form
        :action="route('manage.blogs.update', $blog)"
        method="PUT"
        :model="$blog"
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
        ]"
    />

</x-manage.layouts.main>
