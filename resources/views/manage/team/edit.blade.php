<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.team') }}">
    <x-manage.partials.form
        :action="route('manage.team.update', $team)"
        method="PUT"
        :model="$team"
        :fields="[
            'name' => [
                'label' => __('dashboard.name'),
                'type' => 'text',
                'translatable' => true,
            ],
            'job_title' => [
                'label' => __('dashboard.job_title'),
                'type' => 'text',
                'translatable' => true,
            ],
            'description' => [
                'label' => __('dashboard.description'),
                'type' => 'textarea',
                'translatable' => true,
            ],
            'facebook' => [
                'label' => __('dashboard.facebook'),
                'type' => 'text',
                'translatable' => false,
            ],
            'linkedin' => [
                'label' => __('dashboard.linkedin'),
                'type' => 'text',
                'translatable' => false,
            ],
            'instagram' => [
                'label' => __('dashboard.instagram'),
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