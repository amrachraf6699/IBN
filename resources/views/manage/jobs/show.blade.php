<x-manage.layouts.main :title="$job->title">
    <div class="card mb-6">
        <header class="card-header noborder flex items-center justify-between">
            <h4 class="card-title">
                {{ $job->title }}
            </h4>
            <a href="{{ route('manage.jobs.index') }}" class="btn btn-secondary">
                {{ __('dashboard.back') }}
            </a>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.description') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{!! $job->description !!}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.terms_conditions') }}</h5>
                    <p class="text-slate-600 dark:text-slate-300">{!! $job->terms !!}</p>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">{{ __('dashboard.questions') }}</h5>
                    <ul>
                    @foreach ($job->questions as $question)
                        <li class="text-slate-600 dark:text-slate-300">
                            {{ $question->question }} - <span class="text-sm text-info-600">{{ $question->type }}</span>
                        </li>
                    @endforeach
                    </ul>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center border rounded-lg py-4 bg-success-50 dark:bg-success-900">
                        <h6 class="text-success-600 text-lg font-bold">{{ $job->invitations_count }}</h6>
                        <p class="text-slate-600 dark:text-slate-300">{{ __('dashboard.invitations_count') }}</p>
                    </div>
                    <div class="text-center border rounded-lg py-4 bg-primary-50 dark:bg-primary-900">
                        <h6 class="text-primary-600 text-lg font-bold">{{ $job->applications_count }}</h6>
                        <p class="text-slate-600 dark:text-slate-300">{{ __('dashboard.applications_count') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Applications List --}}
    <div class="card mb-6">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.applications') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                    <thead class="border-t border-slate-100 dark:border-slate-800">
                        <tr>
                            <th class="table-th">#</th>
                            <th class="table-th">{{ __('dashboard.email') }}</th>
                            <th class="table-th">{{ __('dashboard.interview_date') }}</th>
                            <th class="table-th">{{ __('dashboard.status') }}</th>
                            <th class="table-th">{{ __('dashboard.applied_at') }}</th>
                            <th class="table-th">{{ __('dashboard.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                        @forelse ($job->applications as $application)
                            <tr>
                                <td class="table-td">{{ $application->id }}</td>
                                <td class="table-td">{{ $application->email }}</td>
                                <td class="table-td">
                                    @if ($application->interview_date)
                                        {{ $application->interview_date->format('Y-m-d H:i') }}
                                    @else
                                        <span class="text-slate-500">{{ __('dashboard.no_interview_date') }}</span>
                                    @endif
                                </td>
                                <td class="table-td">
                                    <span class="inline-block px-3 py-1 rounded-full text-center {{ $application->status == 'accepted' ? 'bg-success-500 text-white' : ($application->status == 'pending' ? 'bg-warning-500 text-white' : 'bg-danger-500 text-white') }}">
                                        {{ ucfirst($application->status) }}
                                    </span>
                                </td>
                                <td class="table-td">{{ $application->created_at->diffForHumans() }}</td>
                                <td class="table-td">
                                    <a href="{{ route('manage.application.show', $application) }}" class="btn btn-primary btn-sm">
                                        {{ __('dashboard.show') }}
                                    </a>
                                    <form action="{{ route('manage.application.delete', $application) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            {{ __('dashboard.delete') }}
                                        </button>
                                    </form>
                                    </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-slate-500">
                                    {{ __('dashboard.no_applications_found') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Invitations List --}}
    <div class="card">
        <header class="card-header noborder">
            <h4 class="card-title">{{ __('dashboard.invitations') }}</h4>
        </header>
        <div class="card-body px-6 pb-6">
            <div class="overflow-x-auto -mx-6">
                <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                    <thead class="border-t border-slate-100 dark:border-slate-800">
                        <tr>
                            <th class="table-th">#</th>
                            <th class="table-th">{{ __('dashboard.email') }}</th>
                            <th class="table-th">{{ __('dashboard.is_visited') }}</th>
                            <th class="table-th">{{ __('dashboard.is_used') }}</th>
                            <th class="table-th">{{ __('dashboard.invited_at') }}</th>
                            <th class="table-th">{{ __('dashboard.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                        @forelse ($job->invitations as $invitation)
                            <tr>
                                <td class="table-td">{{ $invitation->id }}</td>
                                <td class="table-td">{{ $invitation->email }}</td>
                                <td class="table-td">
                                    <span class="inline-block px-3 py-1 rounded-full text-center {{ $invitation->is_visited ? 'bg-success-500 text-white' : 'bg-danger-500 text-white' }}">
                                        {{ $invitation->is_visited ? __('dashboard.yes') : __('dashboard.no') }}
                                    </span>
                                </td>
                                <td class="table-td">
                                    <span class="inline-block px-3 py-1 rounded-full text-center {{ $invitation->is_used ? 'bg-success-500 text-white' : 'bg-danger-500 text-white' }}">
                                        {{ $invitation->is_used ? __('dashboard.yes') : __('dashboard.no') }}
                                    </span>
                                </td>
                                <td class="table-td">{{ $invitation->created_at->diffForHumans() }}</td>
                                <td class="table-td">
                                    <form action="{{ route('manage.invitation.delete', $invitation )}}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            {{ __('dashboard.delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-slate-500">
                                    {{ __('dashboard.no_invitations_found') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-manage.layouts.main>
