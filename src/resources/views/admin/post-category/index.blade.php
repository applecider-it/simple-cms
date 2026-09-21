<x-admin-layout
    :breadcrumbs="['admin.post-categories.index']"
>
    <x-slot name="header">
        <h2 class="app-header-title">
            ユーザー一覧
        </h2>
    </x-slot>

    <div class="app-container-lg">
        <div class="mb-4">
            <a href="{{ route('admin.post-categories.create') }}" class="app-btn-primary">
                新規作成
            </a>
        </div>

        @include('partials.message.session')

        @include('admin.post-category.partials.list')
    </div>
</x-admin-layout>
