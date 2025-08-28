@php
    $statistics = \App\Models\Statistic::all();
@endphp

<form action="{{ route('manage.settings.updateStatistics') }}" method="POST">
    @csrf
    @method('PUT')

    <div id="statistics-list" class="space-y-4">
        @foreach ($statistics as $index => $statistic)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 statistic-item">
                <div>
                    <label class="block mb-1 font-medium">{{ __('dashboard.title') }} ({{ __('dashboard.arabic') }})</label>
                    <input type="text" name="statistics[{{ $index }}][name][ar]" value="{{ old("statistics.$index.name.ar", $statistic->getTranslation('name', 'ar')) }}" class="w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block mb-1 font-medium">{{ __('dashboard.title') }} ({{ __('dashboard.english') }})</label>
                    <input type="text" name="statistics[{{ $index }}][name][en]" value="{{ old("statistics.$index.name.en", $statistic->getTranslation('name', 'en')) }}" class="w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block mb-1 font-medium">{{ __('dashboard.value') }}</label>
                    <input type="number" name="statistics[{{ $index }}][value]" value="{{ old("statistics.$index.value", $statistic->value) }}" class="w-full border rounded px-3 py-2">
                </div>

                <input type="hidden" name="statistics[{{ $index }}][id]" value="{{ $statistic->id }}">
            </div>
        @endforeach
    </div>

    <div class="mt-4 mb-4 flex justify-start">
        <button type="button" id="add-statistic" class="bg-green-500 text-white px-4 py-2 rounded">
            {{ __('dashboard.add_statistic') }}
        </button>
    </div>

    <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        {{ __('dashboard.save') }}
    </button>
</form>

<script>
    let statisticIndex = {{ $statistics->count() }};

    document.getElementById('add-statistic').addEventListener('click', function () {
        const statisticsList = document.getElementById('statistics-list');

        const newStatistic = document.createElement('div');
        newStatistic.className = 'grid grid-cols-1 md:grid-cols-3 gap-4 statistic-item mt-4';

        newStatistic.innerHTML = `
            <div>
                <label class="block mb-1 font-medium">{{ __('dashboard.title') }} ({{ __('dashboard.arabic') }})</label>
                <input type="text" name="statistics[\${statisticIndex}][name][ar]" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">{{ __('dashboard.title') }} ({{ __('dashboard.english') }})</label>
                <input type="text" name="statistics[\${statisticIndex}][name][en]" class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">{{ __('dashboard.value') }}</label>
                <input type="number" name="statistics[\${statisticIndex}][value]" value="0" class="w-full border rounded px-3 py-2">
            </div>
        `;

        statisticsList.appendChild(newStatistic);
        statisticIndex++;
    });
</script>
