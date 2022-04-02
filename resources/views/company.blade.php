<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>社員一覧</h1>
    <ul>
        @forelse ($member as $index => $mem)
            <a href="{{ route('member.member',$index) }}">
                <li>{{ $mem }}</li>
            </a>
        @empty
            <li>not posts yet!</li>
        @endforelse
    </ul>
</x-layout>
