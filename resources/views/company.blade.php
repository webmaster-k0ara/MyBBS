<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>社員一覧</h1>
    <ul>
        @forelse ($member as $mem)
            <a href="{{ route('member.member',$mem) }}">
                <li>{{ $mem->name }}</li>
            </a>
        @empty
            <li>not posts yet!</li>
        @endforelse
    </ul>
</x-layout>
