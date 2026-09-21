<?php

namespace App\Services\Post;

use App\Models\Post;
use App\Models\Post\Category;

/**
 * 投稿の一覧関連
 */
class ListService
{
    /**
     * 一覧用のリストオブジェクト
     */
    public function getPosts(?int $postCategoryId)
    {
        $posts = Post::with(['categories' => fn($query) => $query->forUser()])
            ->latest();

        $selectedCategory = null;

        if ($postCategoryId) {
            $selectedCategory = Category::find($postCategoryId);

            $posts = $posts->whereHas('categories', function ($query) use ($postCategoryId) {
                $query->where('post_categories.id', $postCategoryId);
            });
        }

        return [$posts, $selectedCategory];
    }
}
