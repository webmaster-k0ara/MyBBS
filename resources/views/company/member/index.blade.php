<x-layout>
    <x-slot name="title">
        {{ $member->name }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo;<a href="{{ route('company') }}">Back</a>
    </div>
    <h1>
        <span>{{ $member->name }}</span>
        <a href="{{ route('member.editMember',$member) }}">[編集]</a>
    </h1>
    <p>{!! nl2br(e($member->profile)) !!}</p>
</x-layout>
