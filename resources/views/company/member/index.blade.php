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
        <form method="post" action="{{ route('member.destroyMember',$member) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[×]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($member->profile)) !!}</p>
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
        }
    </script>
</x-layout>
