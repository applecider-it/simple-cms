<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post\Category;
use Illuminate\Http\Request;

/**
 * 投稿カテゴリー管理コントローラー
 */
class PostCategoryController extends Controller
{
    public function __construct(
     ) {}

    /** 一覧 */
    public function index(Request $request)
    {
        $categories = Category::latest()->get();

        return view('admin.post-category.index', compact('categories'));
    }

    /** 新規作成 */
    public function create()
    {
        $category = new Category();
        return view('admin.post-category.create', compact('category'));
    }

    /** 登録処理 */
    public function store(Request $request)
    {
        $category = new Category();
        $validated = $request->validate(
            rules: [
                'name' => $category->validationName(),
            ],
            attributes: [
                'name' => __('app.models.post/category.columns.name'),
            ]
        );

        $category = Category::create($validated);

        return redirect()->route('admin.post-categories.edit', $category)->with('success', '投稿カテゴリーを作成しました');
    }

    /** 編集 */
    public function edit(Category $category)
    {
        return view('admin.post-category.edit', compact('category'));
    }

    /** 更新処理 */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate(
            rules: [
                'name' => $category->validationName(),
            ],
            attributes: [
                'name' => __('app.models.post/category.columns.name'),
            ]
        );

        $category->update($validated);

        return redirect()->route('admin.post-categories.edit', $category)->with('success', '投稿カテゴリーを更新しました');
    }

    /** 削除 */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.post-categories.index')->with('success', '投稿カテゴリーを削除しました');
    }
}
