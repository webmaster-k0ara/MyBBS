<x-layout>
    <x-slot name="title">
        社員登録 - My BBS
    </x-slot>

    <div class="back-link">
        &laquo; <a href="{{ route('company') }}">社員一覧へ</a>
    </div>

    <h1>社員登録</h1>

    <form method="post" action="{{ route('member.storeMember') }}">
        @csrf

        <div class="form-group">
            <label>
                名前
                <input type="text" name="name" value="{{ old('name') }}">
            </label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                プロフィール
                <textarea name="profile">{{ old('profile') }}</textarea>
            </label>
            @error('profile')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>Add</button>
        </div>
    </form>
</x-layout>
