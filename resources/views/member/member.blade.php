<x-layout>
    <x-slot name="title">
        {{ $member->name }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo;<a href="{{ route('member.company') }}">Back</a>
    </div>
    <h1>{{ $member->name }}</h1>
    <p>{{ $member->profile }}</p>
</x-layout>
