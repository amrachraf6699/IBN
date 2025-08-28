<x-manage.layouts.main title="{{ __('dashboard.website_settings') }}">
    <div class="container">
        <ul class="flex border-b">
            <li class="mr-1 ml-1">
                <a href="#general" class="inline-block py-2 px-4 text-primary-500 font-semibold active-tab">{{ __('dashboard.general_settings') }}</a>
            </li>
            <li class="mr-1 ml-1">
                <a href="#contact" class="inline-block py-2 px-4 text-gray-500 hover:text-blue-500">{{ __('dashboard.contact_settings') }}</a>
            </li>
            <li class="mr-1 ml-1">
                <a href="#statistics" class="inline-block py-2 px-4 text-gray-500 hover:text-blue-500">{{ __('dashboard.statistics') }}</a>
            </li>
        </ul>

        <div id="general-tab" class="tab-content mt-4">
            @include('manage.settings.partials.general')
        </div>
        <div id="contact-tab" class="tab-content mt-4 hidden">
            @include('manage.settings.partials.contact')
        </div>
        <div id="statistics-tab" class="tab-content mt-4 hidden">
            @include('manage.settings.partials.statistics')
        </div>
    </div>

    <script>
        const tabs = document.querySelectorAll('a[href^="#"]');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                tabs.forEach(t => t.classList.remove('text-primary-500', 'font-semibold', 'active-tab'));

                this.classList.add('text-primary-500', 'font-semibold', 'active-tab');

                contents.forEach(content => {
                    content.classList.add('fade-out');
                    content.classList.remove('fade-in');
                    setTimeout(() => {
                        content.classList.add('hidden');
                    }, 300);
                });

                const targetId = this.getAttribute('href') + '-tab';
                const targetContent = document.querySelector(targetId);

                setTimeout(() => {
                    targetContent.classList.remove('hidden');
                    targetContent.classList.remove('fade-out');
                    targetContent.classList.add('fade-in');
                }, 300);
            });
        });
    </script>

    <style>
        .active-tab {
            border-bottom: 2px solid #3b82f6;
        }

        .fade-in {
            animation: fadeIn 0.3s ease forwards;
        }

        .fade-out {
            animation: fadeOut 0.3s ease forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            0% { opacity: 1; transform: translateY(0); }
            100% { opacity: 0; transform: translateY(10px); }
        }
    </style>
</x-manage.layouts.main>
