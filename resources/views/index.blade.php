<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>
    <h1>My BBS</h1>
    <ul>
        @forelse ($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}">
                <li>{{ $post->title }}</li>
            </a>
        @empty
            <li>not posts yet!</li>
        @endforelse
    </ul>
</x-layout>
