<x-layout>
    <x-slot name="title">
        プロフィール編集 - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('member.member',$member) }}">プロフィールへ</a>
    </div>

    <h1>プロフィール編集</h1>

    <form method="post" action="{{ route('member.updateMember',$member) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>
                名前
                <input type="text" name="name" value="{{ old('name',$member->name) }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                プロフィール
                <textarea name="profile">{{ old('profile',$member->profile) }}</textarea>
            </label>
            @error('profile')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>更新</button>
        </div>
    </form>
</x-layout>
