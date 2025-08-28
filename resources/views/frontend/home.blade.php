@php
$settings = settings();
@endphp
<x-frontend.layouts.main :title="__('frontend.home')">
    <x-frontend.layouts.partials.hero :sliders="$sliders" />
    <x-frontend.layouts.partials.who-are-we :settings="$settings" :statistics="$statistics" />
    @if($services->count() > 0)
    <x-frontend.layouts.partials.our-services :services="$services" />
    @endif
    {{-- <x-frontend.layouts.partials.our-projects /> --}}
    @if($partners->count() > 0)
    <x-frontend.layouts.partials.our-partners :partners="$partners" />
    @endif
    @if($news->count() > 0)
    <x-frontend.layouts.partials.latest-news :news="$news" />
    @endif
    @if($team->count() > 0)
    <x-frontend.layouts.partials.team-members :team="$team" />
    @endif
</x-frontend.layouts.main>