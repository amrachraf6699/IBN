<x-manage.layouts.main title="{{ __('dashboard.create') }} {{ __('dashboard.admins') }}">
    <x-manage.partials.form
        :action="route('manage.admins.update', $admin)"
        method="PUT"
        :model="$admin"
        :fields="[
            'name' => [
                'label' => __('dashboard.name'),
                'type' => 'text',
                'translatable' => false,
            ],
            'email' => [
                'label' => __('dashboard.email'),
                'type' => 'text',
                'translatable' => false,
            ],
            'password' => [
                'label' => __('dashboard.password'),
                'type' => 'text',
                'translatable' => false,
            ],
            'role' => [
                'label' => __('dashboard.role'),
                'type' => 'select',
                'options' => $roles
                    ->pluck('name', 'name')
                    ->toArray(),
                ],
        ]"
    />

</x-manage.layouts.main>
