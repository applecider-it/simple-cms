<div class="app-table-container">
    <table class="app-table">
        <thead class="app-table-thead">
            <tr>
                <th class="app-table-th">ID</th>
                <th class="app-table-th">カテゴリー名</th>
                <th class="app-table-th">作成日時</th>
                <th class="app-table-th">操作</th>
            </tr>
        </thead>
        <tbody class="app-table-tbody">
            @foreach($categories as $category)
                <tr>
                    <td class="app-table-td">{{ $category->id }}</td>
                    <td class="app-table-td">{{ $category->name }}</td>
                    <td class="app-table-td">{{ $category->created_at }}</td>
                    <td class="app-table-td flex space-x-2">
                        <a href="{{ route('admin.post-categories.edit', $category) }}" class="app-btn-primary app-btn-small">
                            編集
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
