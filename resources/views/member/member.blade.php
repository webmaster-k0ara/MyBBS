<x-layout>
    <x-slot name="title">
        {{ $member }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo;<a href="{{ route('member.company') }}">Back</a>
    </div>
    <h1>{{ $member }}</h1>
</x-layout>
