<x-layout>
    <x-slot name="title">
        {{ $member->name }} - My BBS
    </x-slot>
    <div class="back-link">
        &laquo;<a href="{{ route('company') }}">Back</a>
    </div>
    <h1>
        <span>{{ $member->name }}</span>
        <a href="{{ route('member.editMember', $member) }}">[編集]</a>
        <form method="post" action="{{ route('member.destroyMember', $member) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[×]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($member->profile)) !!}</p>
    <h2>Comments</h2>
    <ul>
        <li>
            <form method="post" action="{{ route('comments.storeMember', $member) }}" class="comment-form">
                @csrf
                <input type="text" name="body">
                <button>Add</button>
            </form>
        </li>
        @foreach ($member->commentsmember()->latest()->get() as $comment)
            <li>
                {{ $comment->body }}
                <form method="post" action="{{ route('commentsmember.destroy',$comment) }}" class="delete-comment">
                    @csrf
                    @method('DELETE')
                    <button class="btn">[×]</button>
                </form>
            </li>
        @endforeach
    </ul>
    <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
            document.querySelectorAll('.delete-comment').forEach(form => {
                form.addEventListener('submit', e => {
                    e.preventDefault();

                    if (!confirm('Sure to delete?')) {
                        return;
                    }

                    form.submit();
                });
            });
        }
    </script>
</x-layout>
