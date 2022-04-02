<x-layout>
    <x-slot name="title">
        {{ $member->name }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo;<a href="{{ route('company') }}">Back</a>
    </div>
    <h1>{{ $member->name }}</h1>
    <p>{!! nl2br(e($member->profile)) !!}</p>
</x-layout>
