<x-admin-layout
    :breadcrumbs="['admin.post-categories.edit', $category]"
>
    <x-slot name="header">
        <h2 class="app-header-title">
            ユーザー編集
        </h2>
    </x-slot>

    <div class="app-container-lg">
        <div class="mb-6">
            <a href="{{ route('admin.post-categories.index') }}" class="app-btn-secondary">
                一覧に戻る
            </a>
        </div>

        @include('partials.form.errors')

        @include('partials.message.session')

        <form method="POST" action="{{ route('admin.post-categories.update', $category) }}" class="app-form" data-app-form-require-dirtycheck="on">
            @csrf
            @method('PUT')

            @include('admin.post-category.partials.form')

            <div>
                <label for="name" class="app-form-label">作成日時</label>
                {{ $category->created_at }}
            </div>

            <div>
                <label for="name" class="app-form-label">更新日時</label>
                {{ $category->updated_at }}
            </div>

            <div class="pt-4">
                <button type="submit" class="app-btn-primary">
                    更新
                </button>
            </div>
        </form>

        <div class="mt-20">
            <div class="flex justify-between items-center">
                <div>
                    削除
                </div>
                <div>
                    <form method="POST" action="{{ route('admin.post-categories.destroy', $category) }}" data-app-form-require-dirtycheck="on"
                    onsubmit="return confirm('削除してもよろしいですか？')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="app-btn-danger">
                            削除
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
