<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>
        <span>社員登録</span>
        <a href="{{ route('member.createMember') }}">[一緒に働く]</a>
    </h1>
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
